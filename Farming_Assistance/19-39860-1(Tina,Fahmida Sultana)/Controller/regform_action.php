<?php 	

	$fullName = $username = $password = "";
	
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$fullName = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		header("Location: loginaction.php");
	}

	else {
		header("Location: welcome.php");
	}

?>