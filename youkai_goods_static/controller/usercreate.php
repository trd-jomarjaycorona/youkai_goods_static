<?php 

	session_start();

	include_once('database.php');
		
	if(!isset($_SESSION['islogin']))
	{
		header('location: index.php');
		exit();
	}


		if (isset($_POST)) {
			$fullname		= trim($_POST['name']);
			$username		= trim($_POST['user']);
			$password		= md5($_POST['pass']);

			addAdmin($username, $password, $fullname);
		}

		echo json_encode($_POST);






 ?>