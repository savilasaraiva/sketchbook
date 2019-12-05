<?php session_start();

require '../vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$col = $client->sketchbook;

$id = $_SESSION["id"];

$collection = $col->test;

$item = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

$countPub = sizeof((array)$item->publics);
$countPub++;

// verifica se foi enviado um arquivo 
if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{

	/* echo "Você enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
	echo "Este arquivo é do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
	echo "Temporáriamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
	echo "Seu tamanho é: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";
 */

	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
	$nome = $_FILES['arquivo']['name'];
	

	// Pega a extensao
	$extensao = strrchr($nome, '.');

	// Converte a extensao para mimusculo
	$extensao = strtolower($extensao);

	// Somente imagens, .jpg;.jpeg;.gif;.png
	// Aqui eu enfilero as extesões permitidas e separo por ';'
	// Isso server apenas para eu poder pesquisar dentro desta String
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao)){
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = $_SESSION['usuario'].$countPub.$extensao;
		
		// Concatena a pasta com o nome
		$destino = '../assets/img/publics/'.$novoNome; 
		
		// tenta mover o arquivo para o destino
		if( @move_uploaded_file( $arquivo_tmp, $destino  )){
			//echo "<div class = 'alert alert-success'>".$_SESSION['success']."</div>";
			//echo "<img src=\"" . $destino . "\" />";
			$_SESSION['success'] = "Foto Postada!";

			include 'db.inc.php';
			$bulk = new MongoDB\Driver\BulkWrite;
			$collection = $col->test;
			
			$idUser = new MongoDB\BSON\ObjectId($id);

			try {
				$bulk->update(
					array("_id"=>$idUser),
					array('$addToSet' => array("publics" => $novoNome))
				);
				$result = $manager->executeBulkWrite($dbname, $bulk);
				header("Location: ../index.php");
			}catch(MongoDB\Driver\Exception\Exception $e){
				die("Error Encountered ".$e);
			}

					
		}else
			$_SESSION['error'] = "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
		
	}
	else
		$_SESSION['warning'] = "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
}
else
{
	$_SESSION['dark'] = "Você não enviou nenhum arquivo!";
}

?>
