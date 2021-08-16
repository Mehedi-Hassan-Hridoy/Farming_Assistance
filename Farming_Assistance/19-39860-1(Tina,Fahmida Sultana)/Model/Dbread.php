<?php

require "‪C:\xampp\htdocs\Efarming\Model\Dbconnect.php";


  function login($username, $password){
       $conn =connect();
    $sql = $conn->prepare("SELECT * FROM USER WHERE password = ? and username = ?");
    $sql-> bind_param("ss",$username, $password);
    $sql->execute();
    $records = $sql->get_result();
    return $records->num_rows ===1;
}

?>