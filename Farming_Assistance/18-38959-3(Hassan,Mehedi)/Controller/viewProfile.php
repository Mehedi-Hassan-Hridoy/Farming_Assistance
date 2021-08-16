<?php
session_start();
include '../Model/DBEditProfile.php'; 
$users = getProfile();
$userName =$_SESSION['userName'];


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
echo"<table>";
  echo "<tr>";
  echo "<th>Id</th>";
  echo "<th>Name</th>";
  echo "<th>DOB</th>";
  echo "<th>email</th>";
  echo "<th>uname</th>";
  echo "<th>pass</th>";
  echo "</tr>";

  for($i=0; $i < count($users); $i++){
    echo "<tr>";
  echo "<td>". $users[$i]["id"] ."</td>";
  echo "<td>". $users[$i]["name"] ."</td>";
  echo "<td>". $users[$i]["dob"] ."</td>";
  echo "<td>". $users[$i]["email"] ."</td>";
  echo "<td>". $users[$i]["userName"] ."</td>";
  echo "<td>". $users[$i]["password"] ."</td>";
  echo "</tr>";

  }
  echo "</table>";

?>
</body>
</html>

