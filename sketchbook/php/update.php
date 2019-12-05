<?php
    include 'db.inc.php';
    $bulk = new MongoDB\Driver\BulkWrite;

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $bio = $_POST["bio"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];


    try {
        $bulk->update(['_id' => new MongoDB\BSON\ObjectId($id)],
        [
            'nome' => $nome, 
            'email' => $email, 
            'usuario' => $usuario, 
            'senha' => $senha,
            'bio' => $bio
        ]);
        $result = $manager->executeBulkWrite($dbname, $bulk);
        header("Location: ../userlist.php");
    }catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered ".$e);
    }
?>