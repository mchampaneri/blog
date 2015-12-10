<?php
if(!empty($_POST['catagory_name']) && !empty($_POST['slug'])) {
	$catagory_name = $_POST['catagory_name'];
	$slug = $_POST['slug'];
	$time = time();


	require '../../global/includes/sql_connect.php';

	$query = "INSERT INTO catagory (name,slug,crate_at)
					VALUES ( '$catagory_name', '$slug',now())";

	echo query;
	$action_result = mysql_query($query) or die(mysql_error());
}
	header('Location: .\catagory.php');

?>