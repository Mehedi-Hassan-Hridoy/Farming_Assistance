<?php

 

session_start();

 

if (isset($_SESSION['username'])) {
    session_destroy();
  include("http://localhost/project3/view/login.php");
 

}

 

else{
    include("http://localhost/project3/view/login.php");
}

 

 ?>