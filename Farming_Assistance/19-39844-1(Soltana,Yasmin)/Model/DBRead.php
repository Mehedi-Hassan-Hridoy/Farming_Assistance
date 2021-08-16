<?php
 require "C:xampp\htdocs\Project\Model\DBConnect.php";

function login($Username, $Password){
    $conn=connect();
    $sql =$conn->prepare("SELECT * FROM login WHERE Username=? and Password=?");
    $sql->bind_param("ss",$Username, $Password);
    $sql->execute();
    $result=$sql->get_result();
    return $result->num_rows === 1 ;
}
function searchUser($Username){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM `login` WHERE Username = ?");
    $sql->bind_param("s",$Username);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}

?>