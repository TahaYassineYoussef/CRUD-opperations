<?php
try{
	require_once 'pdo-connect.php';
	$sql = "DELETE FROM crud WHERE lastname =' ' "; 
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
	echo $delete . "Records Deleted from DB";