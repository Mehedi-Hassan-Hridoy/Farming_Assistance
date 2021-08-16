<!DOCTYPE html>
<html >
<head>
<body>  
</body>
 <style>
 h2{
  background-color: thistle;
  font-size: 40px;
  width: 350px;
  padding: 15px;
  margin: 20px;
}
h4 {
  font-size: 15px;
  font-family: Serif;
}
</style> 
<title>Transaction</title> 
</head>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<label><h2>Payment system:</h2></label>
<br><br><h4>
<fieldset style="width: 300px">System:<select name="Payment">
<option>Bkash</option>
<option>Rocket</option>
<option>Card</option>
<option>Cash on delivary</option>
</select>
<br><br>
Agent Number:<input name="Agent Number" value="1457589994"><br> <br>
Total Amount: <input name="TotalAmount"value ='550000'> <br> <br>             
<input type="submit" name="submit" value="Confirm">
</form>
<br></fieldset></h4> 

<a href="logout.php"> Click to logout</a></p>
          
<?php require 'C:\xampp\htdocs\Project\Common\Footer.php';?>

</body>
</html>