<!DOCTYPE html>

<html lang="eng">

<head>

  <link rel="stylesheet" herf="style.css">
  <title>E-Farming</title>

</head>
<body>
<form action="http://localhost/project3/controller/user.php" method="POST" style="border:3px; border-style:solid; border-color:Purple; padding: 4em;">
    
  <h1>Registration</h1>

  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <br><br>

  <label for="email">Email:</label>
  <input type="text" name="email" id="email">
  <br><br>

  <label for="user">User name:</label>
  <input type="text" name="user" id="user">
  <br><br>

  <label for="password"> User Password:</label>
  <input type=" Password" name="password" id="password">
  <br><br>

  

  <label for="gender">Gender:</label>
    <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="other">Other
  <br><br>

  <input type="submit" name="submit" value="Submit">
  <br>

</form>

       <br><br><a href='http://localhost/Project/Index.html'>Go To Home Page</a>



 <br>

</body>
</html>