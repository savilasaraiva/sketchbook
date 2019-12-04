<?php
include 'php/config.php';

  $id = $_POST["id"];
  $user = $_POST["idUser"];
  $collection = $col->test;
  
  $id = new MongoDB\BSON\ObjectId($id);
  $collection->update(array("_id"=>$id),array('$addToSet' => array("curtidas" => $user)));
?>