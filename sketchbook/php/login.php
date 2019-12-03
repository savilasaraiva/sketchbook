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
        $user = $row[0]->username;
        $_SESSION['usuario'] = $user;
        header("Location: ../index.php");
    }   catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }
?>
