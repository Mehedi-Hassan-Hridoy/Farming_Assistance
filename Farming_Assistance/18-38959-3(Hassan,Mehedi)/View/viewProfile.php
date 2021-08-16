

<?php
session_start();
include '../Model/DBEditProfile.php';
$sellers = myProfile($_SESSION['userName']);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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
  <?php include 'layout.php'?>
    <button>
            <a href="profile.php">Home</a> </button>
            <br><br>
            
<fieldset style="height:300px; width:40%">
  <h1>My Information</h1>

            <br><br>
<?php 

  echo"<table border = 1>";
  echo "<tr>";
  echo "<th>Id</th>";
  echo "<th>Name</th>";
  echo "<th>Jdate</th>";
  echo "<th>Salary</th>";
  echo "<th>uname</th>";
  echo "</tr>";

  for($i=0; $i < count($sellers); $i++){
    echo "<tr>";
  echo "<td>". $sellers[$i]["id"] ."</td>";
  echo "<td>". $sellers[$i]["name"] ."</td>";
  echo "<td>". $sellers[$i]["joiningdate"] ."</td>";
  echo "<td>". $sellers[$i]["salary"] ."</td>";
  echo "<td>". $sellers[$i]["username"] ."</td>";
  echo "</tr>";

  }
  echo "</table>";




   ?>
  
</fieldset>
  
</body>
</html> 


