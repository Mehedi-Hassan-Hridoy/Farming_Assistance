<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
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
  width: 535px;
  border: 5px solid black;
  
}
</style>
<?php

require 'C:\xampp\htdocs\Project\Controller\ForgetPassAction.php';
?>
<div style="margin-left: 35%; margin-top: 10%;">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
<h4> <fieldset style="width: 500px">
 <h1><legend>Forget Password</legend></h1>
<h4> <label for="email">Enter Email :</label>
  <input type="email" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><br>

  <input type="submit" value="Submit"></h4>
 </fieldset></h4>
</form> 
<?php echo $msg;?>
</div>
<?php require 'C:\xampp\htdocs\Project\Common\Footer.php';?>
</body>
</html>