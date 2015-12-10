<?php

	 include '../../global/includes/sql_connect.php';

if(isset($_POST['change']) && isset($_POST['id']) && !empty($_POST['catagory_name']) && !empty($_POST['slug']))
	{ //echo "supposed to change the content";
		   //  $query = 'select * from catagory where id='.$query_variable;

		// DATABAE UPDATEING			

			 $query_update= 'update catagory set `name`="'.$_POST['catagory_name'].'", `slug`="'.$_POST['slug'].'"
			 where `id`='.$_POST['id'];
			 
			 $result_update =mysql_query($query_update,$connetion_open);

			 if($result_update){ echo "updated";}


	    	 header('Location: http://localhost/blog/admin/category/catagory.php');
			 exit();
	 }
			
	

	


elseif(isset($_POST['delete']) && isset($_POST['id']) && !empty($_POST['catagory_name']) && !empty($_POST['slug'])){


			$query_delete = 'delete from catagory where id='.$_POST['id'];

			echo  $query_delete;

			$result_delete =mysql_query($query_delete,$connetion_open);

			 if($result_delete){ echo "updated";}

	  	header('Location: http://localhost/blog/admin/category/catagory.php');
        	exit();
}



else	{//echo "Enter the valid Data";

		$_SESSION["fail"] = 142;
		echo "error";
		header('Location: http://localhost/blog/admin/category/catagory.php');
	}
?>