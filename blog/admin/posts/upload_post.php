<?php

if(isset($_POST['new_post']) &&!empty($_POST['post_name']) && !empty($_POST['slug'])) 
{
	
	$post = $_POST['post_name'];
	$slug = $_POST['slug'];
	$discription = $_POST['editor1'];

	$catagory_id =$_POST['catagory_id'];

	$image=$_FILES['image']['tmp_name'];

	if(move_uploaded_file($image, "../imgs/".$_POST['post_name'].".jpg"))
		echo "image uploaded";

	require '../../global/includes/sql_connect.php';

	$query = "INSERT INTO posts (name,slug,create_at,discription,catagory_id)
					VALUES ( '$post', '$slug',now(),'$discription',$catagory_id)";

					 unset($_POST['new_post']);

	echo $query;
	$action_result = mysql_query($query) or die(mysql_error());



}
			
	 header('Location: .\posts.php');		

?>