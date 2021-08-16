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

function myProfile($userName){
	$conn = connect();
	$sql = $conn-> prepare("SELECT * FROM SELLER WHERE userName = ?");
	$sql-> bind_param("s",$userName);
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
}
function editSell($userName,$name,$salary){
	$conn = connect();
	$sql = $conn-> prepare("UPDATE SELLER SET name= ?, salary= ? WHERE userName=?");
	$sql-> bind_param("ssi",$name,$salary,$userName);
	$response = $sql -> execute();
	$conn-> close();
	return $response ;
}


?> 