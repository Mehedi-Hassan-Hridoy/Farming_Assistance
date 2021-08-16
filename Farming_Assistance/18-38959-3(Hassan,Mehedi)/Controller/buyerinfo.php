<?php

include '../Model/DBRead.php';
$buyers = getBuyers();
$error = "";
if(isset($_POST['search'])){

 $buyers = searchB($_POST['name']);
  
}
if(empty($buyers)){
  $error = "No data found. Please Enter valid name.";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Buyers Info</title>
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
            
<fieldset style="height:300px; width:40%">
  <h1>Buyers Information</h1>
<form action = "" method="POST">
  <label>Enter the Buyer Name:</label>
  <input type="text" name="name" id="name"> <input type="submit" name = "search" value="search" > 

</form>

            <br><br>

  <table border = 1>
  <tr>
 <th>Id</th>
 <th>Name</th>
 <th>User Name</th>
 <th>Email</th>

 </tr>
<?php 
  for($i=0; $i < count($buyers); $i++){?>
  <tr>
  <td>
    <?php echo $buyers[$i]["id"] ?>
      
    </td>
    <td>
      <?php echo $buyers[$i]["name"] ?>
        
      </td>
      <td>
        <?php echo $buyers[$i]["user name"]?>
          
        </td>
        <td>
          <?php echo $buyers[$i]["email"] ?>
            
          </td>
         
              
            </td>
 
 <?php
  } 
?>
</tr>

</table>
   <br><br>
   <span style="color: red;"><?php echo $error; ?></span>
</fieldset>
  
</body>
</html> 


