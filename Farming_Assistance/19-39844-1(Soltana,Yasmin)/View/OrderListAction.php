<?php

require '..View/OrderList.php';
$product = empty($_GET['product']) ? "" : $_GET['product'];
if(empty($product)){
    $orderlist=getAllProducts();
}
else{
    $orderlist=getproduct($product);
}
$arr1 =array();
for($i=0; $i< count($orderlist); $i++){
    array_push($arr1,array('id' => $orderlist[$i]["id"], 'product'=>$orderlist[$i]["product"]));
}
echo json_encode($arr1);
?>