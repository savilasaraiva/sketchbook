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
        $email = $row[0]->email;
        $user = $row[0]->usuario;
        $pass = $row[0]->senha;
        
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['usuario'] = $user;        
        $_SESSION['senha'] = $pass;

        header("Location: ../index.php");
    }   catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }
?>
