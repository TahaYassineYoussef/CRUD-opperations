<?php
try{
	require_once 'pdo-connect.php';
	$sql = "INSERT INTO crud (firstname,lastname,email,gender,age) VALUES (:firstname, :lastname,:email,:gender,:age) "; 
	$result = $db -> prepare($sql);
	//$all = $result -> fetchAll(PDO::FETCH_NUM);
	
	//$count = $result->rowCount();
	
	$result = bindValue(1, 'Mr.'.$_GET['fname']);
		$result = bindValue(2, $_GET['lname']);
		$result = bindValue(3, $_GET['email']);
		$result = bindValue(4, $_GET['gender']);
		$result = bindValue(5, $_GET['age'] , PDO::PARAM_INT);
		$res = $result ->execute();
	$errorInfo = $db -> errorInfo();

	if(isset($errorInfo[2])){
		$error = $errorInfo[2];
	}
	catch(Exception $e){
		$error = $e -> getMessage();
	}
	if(isset($error)){echo "Errors: ".$error;}
		var_dump($res);