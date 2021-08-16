<?php
require 'DBConnect.php';
function login($userName,$password){
	$conn= connect();
	$sql = $conn -> prepare("SELECT * FROM ADMIN WHERE userName= ? and password = ?");

	$sql-> bind_param("ss",$userName,$password);
	$sql-> execute();
	$records = $sql->get_result();
	return $records->num_rows === 1;
}

function getSeller(){
	$conn=connect();
	$sql= $conn-> prepare("SELECT * FROM SELLER");
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
} 
function searchS($name){
	$conn = connect();
	$sql = $conn-> prepare("SELECT * FROM SELLER WHERE name = ?");
	$sql-> bind_param("s",$name);
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
}
function getProducts(){
	$conn=connect();
	$sql= $conn-> prepare("SELECT * FROM PRODUCTS");
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
} 

function searchP($name){
	$conn = connect();
	$sql = $conn-> prepare("SELECT * FROM PRODUCTS WHERE name = ?");
	$sql-> bind_param("s",$name);
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
}
function getBuyers(){
	$conn=connect();
	$sql= $conn-> prepare("SELECT * FROM BUYER");
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
} 

function searchB($name){
	$conn = connect();
	$sql = $conn-> prepare("SELECT * FROM BUYER WHERE name = ?");
	$sql-> bind_param("s",$name);
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
}
function getEmployee(){
	$conn=connect();
	$sql= $conn-> prepare("SELECT * FROM EMPLOYEE");
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
} 

function searchE($name){
	$conn = connect();
	$sql = $conn-> prepare("SELECT * FROM EMPLOYEE WHERE name = ?");
	$sql-> bind_param("s",$name);
	$sql->execute();
	$records=$sql->get_result();
	return $records->fetch_all(MYSQLI_ASSOC);
}






?> 