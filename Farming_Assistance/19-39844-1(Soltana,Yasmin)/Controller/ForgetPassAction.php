<?php
$retrive_email="azrasultana1998@gmail.com";
$emailErr = "";
$email = $msg ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  }
  
  }


function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>