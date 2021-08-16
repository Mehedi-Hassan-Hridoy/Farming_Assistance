<?php
include '../Model/DBConnect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<fieldset>
<legend>EDIT INFO.</legend>
<form method="POST" action="">
Name<br>
<input type="text" name="name" value ><br>
Salary<br>
<input type="text" name="salary" value ><br>
 <br><br>
<input type="submit" name="submit" value="SAVE">
</form>
</fieldset>
</body>
</html>
<?php

if(isset($_POST['submit']))
{

	editSell($_POST['id'],$_POST['name'],$_POST['salary']);

header('location:sellerinfo.php');
}
?>

