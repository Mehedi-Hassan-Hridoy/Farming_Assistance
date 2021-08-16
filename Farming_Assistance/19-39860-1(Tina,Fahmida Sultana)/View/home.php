
<?php
require("../view/header.php");
  $username = $password = "";
  if($_SERVER['REQUEST_METHOD'] === "POST") {
    $search= " ";
    $viewall= " ";
    $details = " ";

    if($value === $_POST['username'] && $result === $_POST['password']) {

      if(isset($_POST['Farming'])) {
        setcookie("search", $search, time() + 60*60*24*5);
        setcookie("viewall", $viewall, time() + 60*60*24*5);
        setcookie("details", $details, time() + 60*60*24*5);
       
      }

      session_start();
      $_SESSION['search'] = $search;
      $_SESSION['select'] = $select;
      $_SESSION['details'] = $details;
    }
  }

  if(isset($_COOKIE['Farming'])) {
    $search = $_COOKIE['search'];
    $select = $_COOKIE['velect'];
    $details = $_COOKIE['details'];
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
  <script type="Model/home.js"></script>
  <style>
body
{
background-color:darkgray;
}
h1
{
color:blueviolet;
margin-middle:40px;
}
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 10px;
  width: 400px;
  display: block;
  margin-right: 50px;
}

</style>
    <title>Home page</title>
    </head>
    <body>
      <center>
        <h1>Home </h1>
        <form action=" home.php" method ="GET">
          <li><a href="#">Service</a></li>
        <li><a href="#">Gellary</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contract us</a></li>
          <br></br>
          <label for="search">Search Product:</label>
          <input type="text" id="search" name="search">
          <br></br>
          <label for="select">Select a page :</label>
          <select name="select">
            <option>Order List</option>
            <option>Payment</option>
            <option>Others</option>
          </select>
          <input type="submit" name="Click" value="Click">
          <br><br>
          <label for="details">Details :</label>
<p>Not registered yet? visit<a href="reg.php">For Registration</a></p>
<a href="login.php">Go to Login</a>
<br>
<a href="addfeedback">Feed back</a>
<br>
<a href="logout.php">Log Out</a>
</center>
<a href="farming.png">
  <img src="farming.png" alt="Farming">
</a>
<br><br>
</body>
</html>
<br><br>
<?php
    require("../view/footer.php");
    ?>
