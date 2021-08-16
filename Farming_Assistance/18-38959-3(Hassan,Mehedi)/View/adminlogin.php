<?php
include '../Model/DBRead.php'; 

session_start();
 
$userName = $password ="";
$userNameErr = $passErr ="";
$errorMessage = "";
$isValid = true;

if($_SERVER['REQUEST_METHOD'] == "POST") {

	$userName = $_POST['userName'];
	$password = $_POST['password'];
	if(empty($userName)) {
		$userNameErr = "User name can't be empty!";
		$isValid = false;
    }
    if(empty($password)) {
		$passErr = "Password can't be empty!";
		$isValid = false;
    }
    if($isValid) {
        $userName = test_input($userName); 
        $password = test_input($password);

        $response = login($userName,$password);
        if($response){
            
            $_SESSION['userName']=$userName;
            header('Location:profile.php');
        }
        else{
           $errorMessage="Incorrect input!";
        }
    	
    }
}
function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }
                    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adminlogin</title>
</head>
<body style="background-color:#D60A1C;">
    <style>
        a:hover{
            color: brown;
        }
        a:hover{
            border:2px solid blue;
        }
    </style>
	<fieldset style=" background-color:#B38CB6;height:90px;width:" >
		<h1>E-Farming</h1>
		<h3 style="text-align:right; ">Welcome to E-Farming</h3>
	</fieldset>

	<fieldset style="background-color:#B38CB6;height:250px;width:30% ">
		<h2>Login Portal</h2>
		<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
			<label for="userName">Username:<span style="color:red ">*</span></label>
			<input type="text" name="userName" id="userName"  value="<?php echo $userName; ?>">
            <span style="color: red;"><?php echo $userNameErr; ?></span>
            <br><br>
			<label for="password">Password:<span style="color:red ">*</span></label>
            <input type="password" name="password" id="password">
            <span style="color: red;"><?php echo $passErr; ?></span>
            <br><br>
            <input type="checkbox" name="rememberme" id="rememberme" value="1">
		    <label for="rememberme">Remember Me</label>
		    <input type="submit" value="Login" onclick="JSValidation()"><br>
		    <span style="color: red;"><?php echo $errorMessage; ?></span>
		</form>
        <script>
            function JSValidation(){
                if(document.getElementById('userName').value=="" || document.getElementById('password').value=="")
                    {
                        alert("Please fill Up the all field");
                    }
                    
            }
        </script>
		<br>
		Don't have an account?
		<button>
		 <a href="reg.php">Signup</a> </button> <br><br>
    </fieldset>
   
</body>
</html> 