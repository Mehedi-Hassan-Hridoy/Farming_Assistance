<?php
session_start();
include '../Model/DBInsert.php';
$name = $birthday = $email = $userName = $password ="";
$nameErr = $birthdayErr = $emailErr = $userNameErr = $passwordErr ="";
 $validMessage = $errorMessage = "";
$isValid= true ;

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    
    $birthday = $_POST['birthday'];
    
    $email = $_POST['email'];
   
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if(empty($name)) {
        $nameErr = "Name can't be empty!";
        $isValid = false;
    }
   if(empty($birthday)) {
        $birthdayErr = "Birth date can't be empty!";
        $isValid = false;
    }
    
    if(empty($email)) {
        $emailErr = "Email can't be empty!";
        $isValid = false;
    }
    if(empty($userName)) {
        $userNameErr = "User name can't be empty!";
        $isValid = false;
    }
    if(empty($password)) {
        $passwordErr = "Password can't be empty!";
        $isValid = false;
    }
    if($isValid) {

        if(strlen($userName) > 6){
            $userNameErr = "User name should be in 6 charecter";
            $isValid = false;
        }
        if(strlen($password) > 8){
            $passwordErr = "Password should be in 8 charecter";
            $isValid = false;
        }
        if ($isValid){
            $name = test_input($name);
            $birthday = test_input($birthday);
            $email = test_input($email);
            $userName = test_input($userName); 
            $password = test_input($password);
            
            $response = register($name,$birthday,$email,$userName,$password);
            
            if($response){
                $_SESSION['name']=$name;
                $_SESSION['birthday']=$birthday;
                $_SESSION['email']=$email;
                $_SESSION['userName']=$userName;
                header('Location:adminlogin.php');
            }
            else{
                $errorMessage = "This Username has alreay exist!!";
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
    <title>Registration</title>
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
    
    <fieldset style="background-color:#B38CB6;height:375px;width:25% ">
        <h2>Resistration-Form</h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

            <label  for="name"> Full Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>">
            <span style="color: red;"><?php echo $nameErr; ?></span>

            <br><br>

            <label  for="birthday">Date of birth:</label>
            <input  type="date" id="birthday" name="birthday" value="<?php echo $birthday; ?>">
            <span style="color: red;"><?php echo $birthdayErr; ?></span>

            <br><br>

            <label for="email">Email:</label>
            <input type="email"  id="email" name="email" value="<?php echo $email; ?>">
            <span style="color: red;"><?php echo $emailErr; ?></span>

            <br><br>
 
            <label for="userName">Username:</label>
            <input type="text" name="userName" id="userName" value="<?php echo $userName; ?>">
            <span style="color: red;"><?php echo $userNameErr; ?></span>

            <br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span style="color: red;"><?php echo $passwordErr; ?></span>
            
            <br><br>

            <input type="submit" value="Submit" onclick="JSValidation()" > 
      
        </form>

        <script>
            function JSValidation(){
                if(document.getElementById('name').value=="" || document.getElementById('birthday').value=="" || document.getElementById('email').value=="" || document.getElementById('userName').value=="" || document.getElementById('password').value=="")
                    {
                        alert("Please fill Up the all field");
                    }
                    if(document.getElementById('userName').value.length > 6 || document.getElementById('password').value.length > 8)
                    {
                        alert("Enter valid data");
                    }
                    
                }
            </script>

            <span style="color: red;"><?php echo $validMessage; ?></span><br>
            <span style="color: red;"><?php echo $errorMessage; ?></span><br>
            Already have an account?Click on
            <button>
                <a href="login.php">Login</a> </button> <br><br>
    </fieldset>

</body>
</html> 