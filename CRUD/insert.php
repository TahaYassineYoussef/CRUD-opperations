<?php
try{
	require_once 'pdo-connect.php';
	$sql = "INSERT * INTO crud(firstname , lastname , email , gender , age) VALUES('','','','','')";
	$result = $db -> exec($sql);
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
	echo $result . " Records Inserted in DB ". $db ->lastInsertID();