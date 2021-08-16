<!DOCTYPE html>
<html >
<head><body>
    <header class="grid-container," style="
        margin-top: 150px;">
</body>
     <style>
     body
{
background-color:darkgray;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: powderblue;
  border-box: 200px;
}

</style>
<center>
<title>Payment Method</title> 
<div class="center">
</head>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <from action="addfeedback.php" method="post"
<label><h1>Payment system:</h1></label>
<br><br>
<select name="Payment">
<option>Bkash</option>
<option>Card</option>
<option>Cash on delivary</option>
</select>
<br><br>
<input type="submit" name="submit" value="Confirm">
</form>
</from>
<br>
<a href="../View/logout.php"> Click to Logout</a></p>
<br>
<p style="text-align: center;">Copyright &#169 2021</p>
<br>
</center>
</body>
</html>