<?php

require "C:xampp\htdocs\Project\Model\DBConnect.php";


  function login($Username, $Password){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO login (Username, Password) VALUES (?, ?)");
    $sql-> bind_param("ss",$Username, $Password);
    

   $sql->execute();
   $sql->close();
    $conn->close();
  
}

?>