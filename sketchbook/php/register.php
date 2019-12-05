<?php 
    include 'db.inc.php';
    $bulk = new MongoDB\Driver\BulkWrite;

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $user = [
        '_id' => new MongoDB\BSON\ObjectId,
        'nome' => $nome, 
        'email' => $email, 
        'usuario' => $usuario, 
        'senha' => $senha,
        'curtidas' => [],
        'publics' => [],
        'seguindo' => [],
        'seguidores' => []
    ];

    try{
        $bulk->insert($user);
        $result = $manager->executeBulkWrite($dbname, $bulk);
        header("Location: ../login.php");
    }   catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }
?>
