		<?php
		    $firstName = $lastName = "";
		    $firstNameErr = $lastNameErr = "";
		    $username = $password = "";
        $isValid = true;
        $usernameErr = $passwordErr ="";
        $successfulMessage = $errorMessage ="";
			  $Gender="";
			  $err_Gender="";
			  $Email="";
			  $err_Email="";
			  $Religion="";
			  $err_Religion="";
			  $phone="";
			  $err_phone="";
			  $PresentAddress="";
			  $err_PresentAddress="";
			  $PermanentAddress="";
			  $err_PermanentAddress="";
			if($_SERVER['REQUEST_METHOD'] === "POST") {
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				if(empty($firstName)) 
				{
					$firstNameErr = "First name can not be empty!";
					$flag = true;
				}
				if(empty($lastName)) 
					{
						$lastNameErr = "Last name can not be empty!";
						$flag = true;
					}
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["username"])){
				if (!isset($_POST["Gender"])){
                    $err_gender=   "Select a gender  ";
                }
				else{
					if (isset($Gender) && $Gender=="Male"){
						$gender=$_POST["Gender"];
					}
					else{
						if (isset($Gender) && $Gender=="Female"){
							$Gender=$_POST["Gender"];
						}
				    }
				}
				if(empty($_POST["Email"])){
                    $err_Email="this field is required";
                        
                    }
                }
				else {
                    $Email=$_POST["Email"];
                }
				if(empty($_POST["Religion"])){
					$err_Religion="Select ";
				}
				
				else{
					$Religion=$_POST["Religion"];
				}
			}
			if(empty($Phone)) 
					{
						$err_phone = "phone can not be empty!";
						$flag = true;
					}
					if(empty($PermanentAddress)) 
					{
						$err_PermanentAddress= "Permanent Addres can not be empty!";
						$flag = true;
					}
					if(empty($PresentAddress)) 
					{
						$err_PresentAddress = "Present Address can not be empty!";
						$flag = true;
					}
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

 

    $response = register($username, $password);
  }
    if($response) {
        $successfulMessage = "successfully saved.";
    }
    else {
        $errorMessage = "Error while saving.";
    }
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
<title>Ragistration Form</title>
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
<script type="Model/valid.js"></script>
<center>
	<body>
		<h1>Registration Form</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
		method="post">
	<from action="productlist.php">
		<fieldset>
			<legend>Basic information:</legend>
	<br>
	<label for="firstName">First Name<span style="color: red;">*</span>: </label>
	<input type="text" name="firstName" id="firstName">
	<span style="color: red;"><?php echo $firstNameErr; ?></span>
	<br><br>
	<label for="lastName">Last Name<span style="color: red;">*</span>: </label>
	<input type="text" name="lastName" id="lastName">
	<span style="color: red;"><?php echo $lastNameErr; ?></span>
	<br><br>
	<label for="Religion">Religion<span style="color: red;">*</span>: </label>
	<select name="Religion">
		<option>Muslim</option>
		<option>Hindu</option>
		<option>Other</option>
	</select>
		<br><br>
		<label>Gender:<span style="color: red;">*</span>: </label>
		<td>:<input type="radio" value="<?php echo $Gender;?>" name="Gender">Male<input type="radio" value="<?php echo $Gender;?>" name="Gender">Female
			<span><?php echo $err_Gender;?></span>
			<br><br>
			<label for="dob">Enter your date of birth<span style="color: red;">*</span>: </label>
			<input type="text" id="dob" name="dob">
        <fieldset>
	        <legend>Contract information:</legend>
	 <br><br>
	<label for="Present Address">Present Address:</label>
	<textarea id="textarea" name="Present Address"></textarea>
	<br><br>
	<label for="Permanent Address">Permanent Address:</label>
	<textarea id="textarea" name="Permanent Address"></textarea>
	<br><br>
	<label for="lname">Email:<span style="color: red;">*</span>: </label>
	<input type="text" id="lname" name="lname">
	<br><br>
	<label for="lname">Phone:</label>
	<input type="text" id="lname" name="lname">
	<br>
	<fieldset>
	<legend>Account information:</legend>
	<form action="" method="post">
				<label for="username">User Name<span style="color: red;">*</span>: </label>
				<input type="text" name="userame" id="userame">
				<span style="color: red;"><?php echo $usernameErr; ?></span>
				<br><br>
				<label for="password">Password<span style="color: red;">*</span>: </label>
				<input type="password" name="password" id="password">
				<span style="color: red;"><?php echo $passwordErr; ?></span>
				<br><br>
				<input type="submit" name="submit" value="Register">
</form>
      <p style="color: red;"><?php echo $successfulMessage;?></p>
       <p style="color: red;"><?php echo $errorMessage;?></p>
       
       <br><br>
       <p>Back to <a href="Login.php">Login</a></p>
       <p>Go to <a href="productlist.php">Product List</a></p>
       <p>Don't Need?? <a href="logout.php">Logout</a></p>
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

