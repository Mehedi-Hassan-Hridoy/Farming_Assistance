<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title> 
<script src="C:\xampp\htdocs\Project\Registration Validation.js"></script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION[''])){header("location:Home.php");}
else

require 'C:\xampp\htdocs\Project\Controller\RegAction.php';

?> 

 <div style="margin-left: 34%;">

 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
 <fieldset style="width: 400px">
   <style>
   div {
  background-color: thistle;
  width: 420px;
  border: 10px solid black;
  padding: -38px;
  margin: 30px;
}
body {
  background-color: gray;
}
h2{
  color: black;
  text-align: center;
}
p {
  font-family:fantasy;
  font-size: 22px;
}

</style>
        
        <p>Registation:</p>
        <h3>Basic Information:</h3>
       
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
       <label for="firstname">First Name <span style="color: red;"></span>:</label>
        <input type="text" id="firstname" name="firstname"> <span style="color: red;"><? $firstnameErr; ?></span>
        <br><br>
        <label for="lastname">Last Name <span style="color: red;"></span>:</label>
        <input type="text" id="lastname" name="lastname"> <span style="color: red;"><? $lastnameErr; ?></span>
        <br><br>
       <span>Gender</span>
        <td>:<input type="radio" value="<?php echo $Gender;?>" name="Gender">Male<input type="radio" value="<?php echo $Gender;?>" name="Gender">Female
        <br><br>
        <label for="dob">Enter your date of birth:<span style="color: red;"></span>:</label>
       <input type="date" id="dob" name="dob"><br><br>

        <label>Religion</label>
        <select name="Religion">
        <option>Muslim</option>
        <option>Hindu</option>
        <option>Chiristian</option>
        <option>Budda</option>
         </select>
        
      <h3>Contact Information:</h3>
       
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
     <label for="paddress">Present address:</label>
        <input type="textarea" id="paddress" name="paddress"><br><br>

   <label for="address">Permanent address:</label>
        <input type="textarea" id="address" name="address"><br><br>


    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone"><br><br>
    <label for="email">Email<span style="color: red;"></span>:</label>
    <input type="email" id="email" name="email"><br><br>
      <label for="personal website">Personal website :</label>
    <a href="url">https://github.com/yasmin-soltana"</a>
 
    <h3>Account Information:</h3>

     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
      <label for="username">Username:</label>
         <input type="text" placeholder="Username" value="<?php  $username;?>" name="username"><br><br>
         <label for="password">Password:</label>
          <td><input type="password" placeholder="Password" value="<?php  $password;?>" name="pass">

 <br><br>
 <input type="submit" name="submit" value="Register"><br>
</form>

<h3>Back to<a href="Login.php">Login</a></h3></fieldset>
</body>
</html>