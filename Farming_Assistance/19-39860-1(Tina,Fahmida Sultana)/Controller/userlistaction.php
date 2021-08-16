<?php
require '..Model/Dbconnect.php';
require '..View/userlist.html';
$username = empty($_GET['username']) ? "" : $_GET['username'];
if(empty($username)){
    $userlist=getAllUsers();
}
else{
    $userlist=getUser($username);
}
$arr1 =array();
for($i=0; $i< count($userlist); $i++){
    array_push($arr1,array('id' => $userlist[$i]["id"], 'username'=>$userlist[$i]["username"]));
}
echo json_encode($arr1);
?>
