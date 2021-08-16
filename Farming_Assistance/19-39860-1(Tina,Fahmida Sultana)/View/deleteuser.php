<?php 

require_once '../Model/Dbupdate.php';

if (deleteUser($_GET['username'])) {
    header('Location: ../View/userlist.html');
}

 ?>