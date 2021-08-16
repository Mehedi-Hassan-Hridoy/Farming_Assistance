<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
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
  width: 530px;
  border: 5px solid black;
}
</style>
<?php 

require 'C:\xampp\htdocs\Project\Controller\ChangePassAction.php';
?>
<div style="margin-left: 35%; margin-top: 10%;">
<form method="post">
 <fieldset style="width: 500px">
<h1><legend>Change Password</legend></h1>

<h4><label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password">
  <span class="error"> <?php  $currentPasswordErr;?></span>
  <br><br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password">
  <span class="error"> <?php  $newPasswordErr;?></span>
  <br><br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password">
  <span class="error"> <?php  $retypenewPasswordErr;?></span>
  <br><br>

  <hr>

  <input type="submit" value="Submit"></h4>

 </fieldset>
</form>
</div> 

<?php require 'C:\xampp\htdocs\Project\Common\Footer.php';?>
</body>
</html>