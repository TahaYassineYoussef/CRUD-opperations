<?php
try{
	require_once 'pdo-connect.php';
	$sql = "INSERT INTO crud (firstname,lastname,email,gender,age) VALUES (:firstname, :lastname,:email,:gender,:age) "; 
	$result = $db -> prepare($sql);
	$values = array(':firstname' => 'Mr.' .$_GET['fname'],
					':lastname' => $_GET['lname'],);
					':firstname' => $_GET['email'],
					':gender' => $_GET['gender'],	
					':age' => $_GET['age']
					);	
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