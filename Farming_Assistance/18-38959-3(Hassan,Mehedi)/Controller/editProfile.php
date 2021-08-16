<?php
session_start();
include '../Model/DBEditProfile.php'; 

$userName =$_SESSION['userName'];

$isValid= true ;


$name = $email = $nameErr = $emailErr = "";

$validMessage = $errorMessage = "";
 
if($_SERVER['REQUEST_METHOD'] == "POST"){
 
    $name= $_POST['name'];
    $email= $_POST['email'];

    if(empty($name)) {
        $nameErr = "Enter data for update";
        $isValid = false;
    }
    if(empty($email)) {
        $emailErr = "Enter data for update";
        $isValid = false;
    }
    if($isValid) {

            $userName = test_input($userName);
            $name = test_input($name);
            $email = test_input($email);
            $response = editProfile($userName,$name,$email);
            if($response){
                $validMessage = "Successfully updated";
            }
            else{
                $errorMessage = "Error while updatinging";
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
    <title>Edit Profile</title>
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
            <legend>Edit Profile</legend>
            <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" value="<?php echo $userName; ?>" disabled>
            <br><br>
            <label for="name">Name:</label>
            <input type="name" id="password" name="name">
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            <br><br>
        </fieldset>
        <br>
        <input type="submit" value="update" onclick="JSValidation()">
    </form>
    <script>
function JSValidation()
{

if(document.getElementById('name').value=="" || document.getElementById('email').value=="")
{
alert("Please fill Up the all field for update");
}

}
</script>
    <span style="color: green;"><?php echo $validMessage; ?></span>
    <span style="color: red;"><?php echo $errorMessage; ?></span>

 




</body>
</html>