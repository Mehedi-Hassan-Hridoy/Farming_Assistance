<?php

require 'DBConnect.php';

function changePass($userName,$password){
	$conn = connect();
	$sql = $conn-> prepare("UPDATE ADMIN SET password=? WHERE userName=?");
	$sql-> bind_param("ss",$password,$userName);
	$response = $sql -> execute();
	$conn-> close();
	return $response;
}
function editProfile($userName,$name,$email){
	$conn = connect();
	$sql = $conn-> prepare("UPDATE ADMIN SET name=?,email=? WHERE userName=?");
	$sql-> bind_param("sss",$name,$email,$userName);
	$response = $sql -> execute();
	$conn-> close();
	return $response;
}

?> 