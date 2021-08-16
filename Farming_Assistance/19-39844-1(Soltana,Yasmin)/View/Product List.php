
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>

     h4{
      font-size: 20px;
     }

body {
  background-color: thistle;
}

h1 {
  font-family:monospace;
  font-size: 35px;
}
</style>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <form action="../Controller/ProductistAction.php" method="Get" name="nForm" onsubmit="getResult(this);return false;">
       
    </form>
    <hr>
    <hr>
   <h4>  <table><th>Product list: </th></table>  
    <input type="submit" name="search" value="Search"><input type="text" name="productlist"><br>
    <br>
      1.<input name="product" value="Bean">
        <br>
        2.<input name="product" value="">
        <br>
       3.<input name="product" value="3">
        <br>
       4.<input name="product" value="5">
       
        <br>
        5.<input name="product" value="">
        <br>
       6.<input name="product" value="3">
        <br>
       7.<input name="product" value="5">
        <br><input type="submit" name="search" value="More">
    <span style="color:red"></span>
    <span style="color:green"></span>
    <br><br></h4>
    <a href="Home.php">Home</a>
    <a href="logout.php">logout</a>
    <hr>


    </body>
</html>



