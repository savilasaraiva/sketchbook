<?php
	//try {

		$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

		$stats = new MongoDB\Driver\Command(["dbstats" => 1]);
		$res = $mng->executeCommand("sketchbook", $stats);
		
		$stats = current($res->toArray());

		print_r($stats);
?>