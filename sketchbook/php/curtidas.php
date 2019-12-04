<?php
include 'php/config.php';


  $id = $_POST["id"];
  $user = $_POST["idUser"];
  $collection = $col->test;

  //$item = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

  
$id = new MongoDB\BSON\ObjectId($id);
$collection->update(array("_id"=>$id),array('$addToSet' => array("curtidas" => $user)));



?>