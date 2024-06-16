<?php
try{
	require_once 'pdo-connect.php';
	$sql = "SELECT * FROM crud";
	$rows = $db ->query($sql);
	$errorInfo = $db -> errorInfo();
	if(isset($errorInfo[2])){
		$error = $errorInfo[2];
	}
}catch (Exception $e) {
	echo $error = $e-> getMessage();
}
if(isset($error)){echo "Errors: ".$error;}
foreach ($db->query($sql) as $key => $value){
echo $row['firstname']." ".$row[2]."<br>";
}