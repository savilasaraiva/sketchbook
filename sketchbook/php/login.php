<?php 
    session_start();
    include 'db.inc.php';
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $filter = [
        'usuario' => $usuario, 
        'senha' => $senha
    ];
    $query = new MongoDB\Driver\Query($filter);

    try{
        $result = $manager->executeQuery($dbname, $query);
        $row = $result->toArray();

        $id = $row[0]->_id;
        $username = $row[0]->nome;
        $user = $row[0]->usuario;
        
        $_SESSION['id'] = $id;
        $_SESSION['usuario'] = $user;
        $_SESSION['nome'] = $username;
        header("Location: ../index.php");
    }   catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }
?>
