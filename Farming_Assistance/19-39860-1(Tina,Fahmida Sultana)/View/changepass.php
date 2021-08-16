<?php
include 'Model\DbUpdate.php';
		    $username = $password = "";
        $isValid = true;
        $usernameErr = $passwordErr ="";
        $successfulMessage = $errorMessage ="";
   if ($_SERVER['REQUEST_METHOD'] === "POST"){
       $username = $_POST['username'];
       $password = $_POST['password'];
   if (empty($username)) {
       $usernameErr = "username can not be empty!";
       $isValid = false;
   }  
   if (empty($password)) {
       $password = " password can not be empty!";
       $isValid = false;
   }
    if($isValid){
			$username = test_input($username);
            $password = test_input($password);
            $response = update($username, $password);
  }
    if($response) {
        $successfulMessage = "successfully updated.";
    }
    else {
        $errorMessage = "Error while updating.";
    }
}			
  function test_input($data) {
       $data = trim($data);
       $data =  stripcslashes($data);
       $data =  htmlspecialchars($data);
       return $data;
}
  ?>
<!DOCTYPE html>
<html>
<title>Change Password</title>
<div class="hom">
<head>
	<style>
body
{
background-color:darkgray;
}
h1
{
color:aliceblue;
margin-middle:40px;
}
.hom{
  max-width: 450px;
  margin: auto;
  border-radius: 5px;
  padding: 20px;
}
input[type=text],select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>
<center>
	<body>
		<h1>Change Password</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
		method="post">
		<from action="reg.php">
				<label for="username">User Name<span style="color: red;">*</span>: </label>
				<input type="text" name="userame" id="userame" value=<?php $username; ?> disable >
				<span style="color: red;"><?php echo $usernameErr; ?></span>
				<br><br>
				<label for="password">Re-type Password<span style="color: red;">*</span>: </label>
				<input type="password" name="password" id="password">
				<span style="color: red;"><?php echo $passwordErr; ?></span>
				<br><br>
				<br><br>
				<label for="password">New-Password<span style="color: red;">*</span>: </label>
				<input type="password" name="password" id="password">
				<span style="color: red;"><?php echo $passwordErr; ?></span>
				<br><br><br><br>
				<label for="password">Confrom-Password<span style="color: red;">*</span>: </label>
				<input type="password" name="password" id="password">
				<span style="color: red;"><?php echo $passwordErr; ?></span>
				<br><br>
				<input type="submit" name="submit" value="Register">
			</from>
		</form>
</form>
      <p style="color: red;"><?php echo $successfulMessage;?></p>
       <p style="color: red;"><?php echo $errorMessage;?></p>
       
       <br><br>
       <p>Go to <a href="home.php">Home Page</a></p>
       <p>Back to <a href="logout.php">Logout</a></p>
       </center>
   </fieldset>
</fieldset>
</td>
</fieldset>
</from>
</form>
</body>
</center>
</div>
   </html>

