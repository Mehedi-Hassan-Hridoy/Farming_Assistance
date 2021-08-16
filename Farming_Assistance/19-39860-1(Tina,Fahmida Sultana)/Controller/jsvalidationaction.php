<?php
if($_SERVER['REQUEST_METHOD']==="POST"){
	If(empty($_POST['firstName']['lastName']['Gender']['Religion']['Email']['Phone'] ['PresentAddress']['ParmanentAddress']['ParmannetAddress'])){
		echo "Field Empty";
	}
	else{
		echo "<h1>Welcome, " . $_POST['firstName']['lastName']['Gender']['Religion']['Email']['Phone'] ['PresentAddress']['ParmanentAddress']['ParmannetAddress'] . "</h1>";
	}
}
?>