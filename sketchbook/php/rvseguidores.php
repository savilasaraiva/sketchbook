<?php
  include 'db.inc.php';
  $bulk = new MongoDB\Driver\BulkWrite;
  $bulk2 = new MongoDB\Driver\BulkWrite;

  $id = $_GET["id"];
  $user = $_GET["idUser"];
  $collection = $col->test;
  
  $idUser = new MongoDB\BSON\ObjectId($id);
  $idUser2 = new MongoDB\BSON\ObjectId($user);

  try {
      $bulk->update(
        array("_id"=>$idUser),
        array('$pull' => 
            array(
              "seguidores" => $user
            )
        )
      );
      $result = $manager->executeBulkWrite($dbname, $bulk);

      $bulk2->update(
        array("_id"=>$idUser2),
        array('$pull' => array("seguindo" => $id))
      );
      $result2 = $manager->executeBulkWrite($dbname, $bulk2);

      header("Location: ../perfil.php?id=".$id);
  }catch(MongoDB\Driver\Exception\Exception $e){
      die("Error Encountered ".$e);
  }
?>