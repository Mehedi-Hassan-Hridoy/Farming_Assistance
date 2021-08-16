<?php

require "‪C:\xampp\htdocs\Efarming\Model\Dbconnect.php";


  function login($username, $password){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $sql-> bind_param("ss",$username, $password);
    $username ='you';
    $password ='098';
    $sql->execute();
    $sql->close();
    $conn->close();
  
}

?>










