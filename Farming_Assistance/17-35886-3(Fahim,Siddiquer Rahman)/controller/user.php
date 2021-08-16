<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "E_Farming";

$name=$_POST["name"];
$email=$_POST["email"];
$user=$_POST["user"];
$pass=$_POST["password"];
$gen=$_POST["gender"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection is failed: " . $conn->connect_error);
} 

if(!empty($user)&&!empty($pass)){
$sql = "INSERT INTO customer_info (Name,Email,User_Name,User_Password,Gender)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["user"]."','".$_POST["password"]."','".$_POST["gender"]."')";
}
else
{
    echo "Registration failed!!!Try again Please";
    die();
}



if ($conn->query($sql) == TRUE) {
    echo "Registration  successful";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>