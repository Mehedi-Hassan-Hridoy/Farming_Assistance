<?php

require "‪C:\xampp\htdocs\Efarming\Model\Dbconnect.php";


  function changePassword($username, $password){
       $conn =connect();
    $sql = $conn->prepare("UPDATE USER SET password = ? where username = ?");
    $sql-> bind_param("ss",$username, $password);
    $response = $sql->execute();
    $conn->close();
    return $response;
}

?>