
 <?php

	 include '../../global/includes/sql_connect.php';

if(isset($_GET['change']) && isset($_GET['id'])) 
/*	{ //echo "supposed to change the content";

			
			
			
		     $query = 'select * from catagory where id='.$query_variable;

		// DATABAE UPDATEING			

			 $query_update= 'update posts set `name`="'.$_GET['name'].'", `catagory_id`="'.$_GET['catagory_id'].'",`slug`="'.$_GET['slug'].'",
			 `discription`="'.$_GET['description'].'."where `id`='.$_GET['id'];
			 
			 echo  $query_update;
			 
			 $result_update =mysql_query($query_update,$connetion_open);

			 if($result_update){ echo "updated";}

			 unset($_GET['change']);
		header('Location: http://localhost/blog/admin/includes/posts.php');
	 } */

	 {

	 	header('Location:http://localhost/blog/admin/posts/update_post.php?id='.$_GET['id']);

	 }
?> 	

	
<?php

if(isset($_GET['delete']) && isset($_GET['id']) ) {


			$query_delete = 'delete from posts where id='.$_GET['id'];

			echo  $query_delete;

			$result_delete =mysql_query($query_delete,$connetion_open);

			 if($result_delete){ echo "updated";}
			  unset($_GET['delete']);

			header('Location: http://localhost/blog/admin/posts/posts.php');
       }

?> 

<?php

	if(isset($_POST['update'])) 
	{ //echo "supposed to change the content";

			
	//		if(unlink("../admin/imgs/".$_POST['post_name'].".jpg"))
	//			echo" file removed";

			$image=$_FILES['image']['tmp_name'];

			if(move_uploaded_file($image, "../imgs/".$_POST['post_name'].".jpg"))
				echo "image uploaded";
			
		    $query = 'select * from catagory where id='.$_POST['id'];

		    $discription = $_POST['editor1'];

		// DATABAE UPDATEING			

			$query_update= 'update posts set `name`="'.$_POST['post_name'].'", `catagory_id`='.$_POST['catagory_id'].',`slug`="'.$_POST['slug'].'"
			,`discription`="'.$discription.'" where `id`='.$_POST['id'];
			 
			 echo  $query_update;
			 
			 $result_update =mysql_query($query_update,$connetion_open);

			 if(!$result_update){ echo mysql_error();}

		header('Location: http://localhost/blog/admin/posts/posts.php');
	 } 



?>


