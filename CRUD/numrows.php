<?php
try{
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM crud";
	$result = $db -> query($sql);
	//$all = $result -> fetchAll(PDO::FETCH_NUM);
	$count = $result->rowCount();
	$errorInfo = $db -> errorInfo();

	if(isset($errorInfo[2])){
		$error = $errorInfo[2];
	}
	catch(Exception $e){
		$error = $e -> getMessage();
	}
	if(isset($error)){echo "Errors: ".$error;}
	echo "Total number of results in CRUD table : ". $count;