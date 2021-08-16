<?php

    require 'C:\xampp\htdocs\Project\Model\DBInsert.php';


   $Username = $Password = "";
   $isValid = true;
   $UsernameErr = $PasswordErr ="";
   $successfulMessage = $errorMessage ="";
   if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

   if (empty($Username)) {
    $UsernameErr = "Username can not be empty!";
    $isValid = false;
   
   }
     
   if (empty($Password)) {
    $Password = " Password can not be empty!";
    $isValid = false;
   }
    if($isValid){

    $Username = test_input($Username);
    $Password = test_input($Password);

    $response = login($Username, $Password); ;
  }
    
   } 
  
 

  function test_input($data) {
     $data = trim($data);
     $data =  stripcslashes($data);
     $data =  htmlspecialchars($data);
     return $data;
}

?>

 
 <form action="" method="POST">
 </head>
  <style style="width: 400px">
  div {

  background-color: thistle;
  width: 320px;
  border: 10px solid black;
  padding: -38px;
  margin: 30px;
}

body {
  background-color: thistle;
}

p {
  font-family:fantasy;
  font-size: 35px;
}

</style>
 <div style="margin-left: 35%; margin-top: 10%;">
<script src="C:\xampp\htdocs\Project\Login Validation.js"></script>
 <fieldset style="width: 300px">
  <p>Login</p>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
  <label for="Username">Username:</label>
    <input type="text" name="Username" id="Username">
        <span style="color:red"><?php echo $UsernameErr;?></span>
        <br><br>
        <label for="Password">Password:</label>
    <input type="Password" name="Password" id="Password">
        <span style="color:red"><?php echo $PasswordErr;?></span>
        <br><br>
       <input type="submit" name="submit" value="Login">
      </form>
       <p style="color : green " ><?php echo $successfulMessage;?></p>
       <p style="color : red" ><?php echo $errorMessage;?></p>
       <a href="Registration.php">Click to Register</a><br><br>
       <a href="Forget Password.php">Forget Password</a>
      <?php require 'C:\xampp\htdocs\Project\common\Footer.php';?>
      
</body>
</html>
