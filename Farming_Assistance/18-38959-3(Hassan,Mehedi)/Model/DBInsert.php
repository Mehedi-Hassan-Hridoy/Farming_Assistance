<?php

require 'DBConnect.php';

function register($name,$birthday,$email,$userName,$password){
	$conn = connect();
	
	$sql = $conn-> prepare("INSERT INTO ADMIN (name,dob,email,userName,password) VALUES(?,?,?,?,?)");
	$sql-> bind_param("sssss",$name,$birthday,$email,$userName,$password);
	$response = $sql -> execute();
	$conn-> close();
	return $response;
}

?> 