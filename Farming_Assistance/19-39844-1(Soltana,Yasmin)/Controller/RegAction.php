<?php
  
 $firstname= $lastname = $gender = $dob = $religion = $emaiL = $username = $password ="";
 $firstnameErr = $lastnameErr = $genderErr = $dobErr = $religionErr = $emaiLErr = $usernameErr = $passwordErr = "";
 $successfulMessage = $errorMessage ="";
$flag=1;
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["firstname"])) 
  {
    $firstnameErr = "FirstName is required";
    $flag=0;
  } 
  else 
  {
    $firstname = test_input($_POST["firstname"]);
     
    }
  }
     if (empty($_POST["lastname"])) 
  {
    $lasrnameErr = "lasttName is required";
    $flag=0;
  } 
  else 
  {
    $lastname = test_input($_POST["lastname"]);
    
    
  }

      
 if(empty($_POST["dob"]))  
  {  
    $dobErr = "Enter Date of Birth";
    $flag=0;  
  }
  else 
  {
    $dob = test_input($_POST["dob"]);
  }

  if(empty($_POST["username"]))  
  {  
    $usernameErr = "User Name is required";
    $flag=0;  
  } 
  else 
  {
    $username = test_input($_POST["username"]);
  }


  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    
    }
    
  if(empty($_POST["gender"]))  
  {  
    $genderErr = "Select Gender"; 
    $flag=0; 
  }
  else 
  {
    $gender = test_input($_POST["gender"]);
  } 

  if(empty($_POST["dob"]))  
  {  
    $dobErr = "Enter Date of Birth";
    $flag=0;  
  }
  else 
  {
    $dob = test_input($_POST["dob"]);
  }

  if ($flag==1) 
  {
    if(isset($_POST["Register"]))  
    {
      if(file_exists('data.json'))  
      {  
        $current_data = file_get_contents('Data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
        'firstname'            =>     $_POST['firstname'],
        'lastname'            =>     $_POST['lastname'],
        'email'           =>     $_POST['email'],
        'religion'        =>      $_POST['religion'],
        'username'       =>     $_POST['username'],
        'password'        =>     $_POST['password'],
        'gender'          =>     $_POST["gender"],  
        'dob'             =>     $_POST["dob"]);  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('Data.json', $final_data))  
        {  
          $message = "File Appended Success fully";  
        } 
      } 
      else  
      {  
        $error = 'JSON File not exits';  
      }
    }  
  }    
 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?> 