<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title> 
</head>  
<body>

<style>

h1{
  font-size: 30px;
  font-family:Monospace;
  background-color: thistle;
}
h4{
  font-size: 20px;
 background-color: thistle;
}
div {
  width: 420px;
  border: 5px solid black;
  padding: -38px;
  margin: 35px;
}
</style>


<div style="margin-left: 35%; margin-top: 2%;">
<fieldset style="width: 400px">
<h1><legend>Edit Profile</legend></h1>                 
  <form method="post"> 
<h4> <label for="Firstname">FirstName <span style="color: red;"></span>:</label>
        <input type="text" id="Firstname" name="Firstname"> <span style="color: red;"><? $firstnameErr; ?></span>
        <br><br>
        <label for="Lastname">LastName <span style="color: red;"></span>:</label>
        <input type="text" id="Lastname" name="Lastname"> <span style="color: red;"><?$lastnameErr; ?></span>
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
         </select><br><br>

<label for="paddress">Present address:</label>
        <input type="textarea" id="paddress" name="paddress"><br><br>

   <label for="address">Permanent address:</label>
        <input type="textarea" id="address" name="address"><br><br>


    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone"><br><br>
    <label for="email">Email<span style="color: red;"></span>:</label>
    <input type="email" id="email" name="email"><br><br>
     
   
         <label for="username">Username:</label>
         <input type="text" text ="Username" value="" name="username"><br><br>
         <label for="password">Password:</label>
          <input type="password" text ="Password" value="" name="pass">

<br><br>
<input type="submit" name="submit" value="Submit"></h4>
</form>  
</fieldset>

</div> 
<?php require 'C:\xampp\htdocs\Project\Common\Footer.php';?>
</body>  
</html>  