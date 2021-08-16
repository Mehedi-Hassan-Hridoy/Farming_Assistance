<?php
$current_password = $new_password = $retype_new_password = "";
$current_passwordErr = $new_passwordErr = $retype_new_passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["current_password"])) 
  {
    $current_passwordErr = "Current Passsword is required";
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["new_password"])) 
  {
    $new_passwordErr = "New password is required";
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["retype_new_password"])) 
  {
    $retype_new_passwordErr = "Retype new password is required";
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