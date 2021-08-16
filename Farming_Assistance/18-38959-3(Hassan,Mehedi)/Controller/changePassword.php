<?php
session_start();
include '../Model/DBEditProfile.php'; 

$userName =$_SESSION['userName'];

$isValid= true ;


$password = $passErr = "";

$nameErr=$birthdayErr = $emailErr = "";
$validMessage = $errorMessage = "";
 
if($_SERVER['REQUEST_METHOD'] == "POST"){
 
    $password = $_POST['password'];

    if(empty($password)) {
        $passErr = "Password can't be empty!";
        $isValid = false;
    }
    if($isValid) {

        if(strlen($password) > 8){
            $passErr = "Password should be in 8 charecter";
            $isValid = false;
        }
        if($isValid){
            $userName = test_input($userName);
            $password = test_input($password);

            $response = changePass($userName,$password);
            if($response){
                $validMessage = "Successfully updated";
            }
            else{
                $errorMessage = "Error while updatinging";
            }

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
    <title>Password change</title>
</head>
<body>
    <style>
        a:hover{
            color: brown;
        }
        a:hover{
            border:2px solid blue;
        }
    </style>
   
    <?php include '../View/layout.php'?>
    <button>
            <a href="../View/profile.php">Home</a> </button>
            <br><br>
            
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            
        <fieldset>
            <legend>Change Password:</legend>
            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" value="<?php echo $userName; ?>" disabled>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>">
            <span style="color: red;"><?php echo $passErr; ?></span>
            <br><br>
        </fieldset>
        <br>
        <input type="submit" value="update" onclick="JSValidation()">
    </form>
    <script>
function JSValidation()
{

if(document.getElementById('password').value=="")
{
alert("Please fill Up the all field");
}

if(document.getElementById('password').value.length > 8 )
  {
    alert("Enter valid number");
    
  }
}
</script>
    <span style="color: green;"><?php echo $validMessage; ?></span>
    <span style="color: red;"><?php echo $errorMessage; ?></span>

 




</body>
</html>