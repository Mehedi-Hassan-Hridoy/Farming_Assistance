<?php

include '../Model/DBRead.php';
$employee = getEmployee();
$error = "";
if(isset($_POST['search'])){

 $employee  = searchE($_POST['name']);
  
}
if(empty($employee )){
  $error = "No data found. Please Enter valid name.";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Info</title>
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
  <h1>Employee Information</h1>
<form action = "" method="POST">
  <label>Enter the Employee Name:</label>
  <input type="text" name="name" id="name"> <input type="submit" name = "search" value="search" > 

</form>

            <br><br>

  <table border = 1>
  <tr>
 <th>Id</th>
 <th>Name</th>
 <th>Salary</th>
 <th>Designation</th>

 </tr>
<?php 
  for($i=0; $i < count($employee ); $i++){?>
  <tr>
  <td>
    <?php echo $employee [$i]["id"] ?>
      
    </td>
    <td>
      <?php echo $employee [$i]["name"] ?>
        
      </td>
      <td>
        <?php echo $employee [$i]["salary"]?>
          
        </td>
        <td>
          <?php echo $employee [$i]["designation"] ?>
            
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


