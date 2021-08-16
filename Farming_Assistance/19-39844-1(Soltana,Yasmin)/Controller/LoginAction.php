<?php 

$username="Soltana Yasmin";
$userpassword="123";

if (isset($_POST['user_name'])) {
	if ($_POST['user_name']==$username && $_POST['password']==$userpassword) {
		$_SESSION['user_name'] = $username;
		header("location:Welcome.php");
	}
	else{
	}
}
$user_nameErr = $passwordErr = "";
$user_name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["user_name"])) 
  {
    $user_nameErr = "Name is required";
  } 
  else 
  {
  
      $user_nameErr = "Minimum two words";
      $user_name="";
    }
    else if($_POST['user_name']!=$username )
    {
      $user_nameErr="User Name invalid";
    }
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) <= 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
    }
  
    }
    else if($_POST['password']!=$userpassword)
    {
      $passwordErr="Password invalid";
    }
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