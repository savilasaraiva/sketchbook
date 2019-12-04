<?php
  include 'db.inc.php';
  $bulk = new MongoDB\Driver\BulkWrite;

  $id = $_GET["id"];
  $user = $_GET["idUser"];
  $collection = $col->test;
  
  $idUser = new MongoDB\BSON\ObjectId($id);

  try {
      $bulk->update(
        array("_id"=>$idUser),
        array('$addToSet' => array("curtidas" => $user))
      );
      $result = $manager->executeBulkWrite($dbname, $bulk);
      header("Location: ../perfil.php?id=".$id);
  }catch(MongoDB\Driver\Exception\Exception $e){
      die("Error Encountered ".$e);
  }
?>