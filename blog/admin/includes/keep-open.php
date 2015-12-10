<?php
	session_start();

	if($_SESSION['authticate'] != true)
	{
		
		echo "Login Failed";
		header('Location:http://localhost/blog/login.php');
		exit();
	}

