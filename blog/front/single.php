
<!doctype html>
<html>
<head>
	<title>SMALLBLOG</title>
	<link rel="stylesheet" type="text/css" href="../global/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../global/css/blog.css">
</head>
<body>
	<div class="page">

 
  <!-- TOP MENU IS INCLUDED HERE -->	
	
		<div class="menu-top">
			<div class="container">
				<?php  include '../global/includes/menu.php' ?>
			</div>
		</div>
 
  <!-- HEADING IS INCLUDED HERE -->
		
		<div class="head">
			<div class="jumbotron">
				<div class="container">
					<div class="title_block">
						<h1> <center> BLOGGER </center> </h1>
					</div>
				</div>
			</div>			
		</div>


<!-- FETCHING POINT STARTS -->

	<div class="post_results">
		<div class="container">
			<?php
				
				if(isset($_GET['id']))
						{
							include '../global/includes/sql_connect.php';

							// Fetching actual Data

							$query = "select * from posts where id=".$_GET['id'];

			//				echo $query;

							$result = mysql_query($query,$connetion_open);

							$number_of_row = mysql_num_rows($result);

							if(!($number_of_row==1))
							{
								echo "NO SUCH A POST FOUND";
								die();
							}

								echo '<div class="post_result">';
									echo '<div class="single">';
												
										
										while( $row =mysql_fetch_assoc($result) ){
																											
														echo '<center> <img src="http://localhost/blog/admin/imgs/'.$row['name'].'.jpg"/></center> </br>';							
														echo '<h2><font face="roboto" color="#rgb(255,233,233)">'.$row['name'].'</font></h2>';
														echo '<font color="#777">'.$row['create_at'].'</font></br>';
														echo '</br> DETAIL IS BELOW </br> <hr>';
														echo $row['discription'];
														
							
										}
									echo '</div>';
								echo '</div>';
							}
							else
										{
											echo "<div class=content>";
											print "!SORRY, NO DATA FOUND";
											print '</br>';
											print "SEEMS TO BE WRONG SERCH DETAILS";
											echo "</div>";
										}

			?>
		

		</div>
	</div>
</div>
<div class="footer">
		
		MANISH H. CHAMPANERI

</div>


</script>

</body>
</html>