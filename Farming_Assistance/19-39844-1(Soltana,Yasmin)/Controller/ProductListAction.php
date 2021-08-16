<?php

require '..View/Productlist.php';
$product = empty($_GET['product']) ? "" : $_GET['product'];
if(empty($product)){
    $productlist=getAllProducts();
}
else{
    $oproductlist=getproduct($product);
}
$arr1 =array();
for($i=0; $i< count($productlist); $i++){
    array_push($arr1,array('id' => $productlist[$i]["id"], 'product'=>$productlist[$i]["product"]));
}
echo json_encode($arr1);
?>