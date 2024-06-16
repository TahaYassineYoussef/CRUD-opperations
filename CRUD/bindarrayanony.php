<?php
try{
	require_once 'pdo-connect.php';
	$sql = "INSERT INTO crud (firstname,lastname,email,gender,age) VALUES (:firstname, :lastname,:email,:gender,:age) "; 
	$result = $db -> prepare($sql);

	$res = $result -> execute(array('Mr.' .$_GET['fname'] , $_GET['lname'],$_GET['email'],$_GET['gender'],$_GET['age']));

	$errorInfo = $db -> errorInfo();

	if(isset($errorInfo[2])){
		$error = $errorInfo[2];
	}
	catch(Exception $e){
		$error = $e -> getMessage();
	}
	if(isset($error)){echo "Errors: ".$error;}
		var_dump($res);