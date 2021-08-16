<?php

include '../Model/DBRead.php';
$products = getProducts();
$error = "";
if(isset($_POST['search'])){

  $products = searchP($_POST['name']);
  
}
if(empty($products)){
  $error = "No data found. Please Enter valid name.";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Products Info</title>
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
  <h1>Products Information</h1>
<form action = "" method="POST">
  <label>Enter the Product Name:</label>
  <input type="text" name="name" id="name"> <input type="submit" name = "search" value="search" > 

</form>

            <br><br>

  <table border = 1>
  <tr>
 <th>Id</th>
 <th>Name</th>
 <th>Price</th>
 <th>Discount</th>

 </tr>
<?php 
  for($i=0; $i < count($products); $i++){?>
  <tr>
  <td>
    <?php echo $products[$i]["Id"] ?>
      
    </td>
    <td>
      <?php echo $products[$i]["Name"] ?>
        
      </td>
      <td>
        <?php echo $products[$i]["Price"]?>
          
        </td>
        <td>
          <?php echo $products[$i]["Discount"] ?>
            
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


