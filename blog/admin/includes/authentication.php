<?php
	
	session_start();

	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];

	if($UserName=="manish@hmail.com" && $Password=="login")
	{
		$_SESSION['authticate']=true;
		header('Location: http://localhost/blog/admin/');
	}

	else
		exit();


?>