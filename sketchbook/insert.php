<?php

$bulk = new MongoDB\Driver\BulkWrite;

$document1 = ['title' => 'one'];
//$document2 = ['_id' => 'custom ID', 'title' => 'two'];
//$document3 = ['_id' => new MongoDB\BSON\ObjectId, 'title' => 'three'];

$_id1 = $bulk->insert($document1);
//$_id2 = $bulk->insert($document2);
//$_id3 = $bulk->insert($document3);

//var_dump($_id1, $_id2, $_id3);
var_dump($_id1);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('sketchbook.test', $bulk);

?>