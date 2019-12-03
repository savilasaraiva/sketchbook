<?php
//require_once __DIR__ . "/redesocial/autoload.php";
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->redesocial->perfil;
//$collection = (new MongoDB\Client)->redesocial->perfil;

?>