<?php
function connect(){
	$conn = new mysqli("localhost","hridoy","123","home");
	
	if($conn -> connect_errno){
		die("Connection Failed: " . $conn -> connect_error);
	}
	
	return $conn;
}

?>