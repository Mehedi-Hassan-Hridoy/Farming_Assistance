<?php

include '../Model/DBRead.php';
$sellers = getSeller();
$error = "";
if(isset($_POST['search'])){

  $sellers = searchS($_POST['name']);
  
}
if(empty($sellers)){
	$error = "No data found. Please Enter valid name.";
}


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
	<?php include '../View/layout.php'?>
    <button>
            <a href="../View/profile.php">Home</a> </button>
            <br><br>
            
<fieldset style="height:300px; width:40%">
	<h1>Seller Information</h1>
<form action = "" method="POST">
	<label>Enter the Seller Name:</label>
  <input type="text" name="name" id="name"> <input type="submit" name = "search" value="search" > 

</form>

            <br><br>

  <table border = 1>
  <tr>
 <th>Id</th>
 <th>Name</th>
 <th>Jdate</th>
 <th>Salary</th>
 <th>uname</th>
 </tr>
<?php 
  for($i=0; $i < count($sellers); $i++){?>
	<tr>
	<td>
    <?php echo $sellers[$i]["id"] ?>
      
    </td>
    <td>
      <?php echo $sellers[$i]["name"] ?>
        
      </td>
      <td>
        <?php echo $sellers[$i]["joiningdate"]?>
          
        </td>
        <td>
          <?php echo $sellers[$i]["salary"] ?>
            
          </td>
          <td>
            <?php echo $sellers[$i]["username"] ?>
              
            </td>
 <td><a href="editSeller.php?username=<?=$sellers[$i]['username']?>&name=<?=$sellers[$i]['name']?>&salary=<?=$sellers[$i]['salary']?>">edit</a></td>
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


