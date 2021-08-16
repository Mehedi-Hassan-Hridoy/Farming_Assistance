
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>

     h4{
      font-size: 25px;
     }

body {
  background-color: thistle;
}

h1 {
  font-family:monospace;
  font-size: 35px;
}
</style>
    <title>Order List</title>
</head>
<body>
    <h1>Order List</h1>
    <form action="../Controller/OrderListAction.php" method="Get" name="nForm" onsubmit="getResult(this);return false;">
        <input type="text" name="orderlist">
        <input type="submit" name="search" value="Search">
    </form>
    <hr>
    <hr>
   <h4>  <table><tr><th></th><th>Order</th><th>Product </th></tr></table>
    <br>
       <input name="product" value="1">
        <br>
        <input name="product" value="2">
        <br>
       <input name="product" value="3">
        <br>
       <input name="product" value="5">
        <br>
    <span style="color:red"></span>
    <span style="color:green"></span>
    <br><br></h4>
    <a href="Home.php">Home</a>
    <a href="logout.php">logout</a>
    <hr>


    </body>
</html>



