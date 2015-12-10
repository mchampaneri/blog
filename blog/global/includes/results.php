<?php  ?>

<!doctype html>
<html>
<head>
	<title>SMALLBLOG</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/blog.css">
</head>
<body>
	<div class="page">

 
  <!-- TOP MENU IS INCLUDED HERE -->	
	
		<div class="menu-top">
			<div class="container">
				<?php  include 'menu.php' ?>
			</div>
		</div>
 
  <!-- HEADING IS INCLUDED HERE -->
		
		<div class="head">
			<div class="jumbotron">
				<div class="container">
					<div class="title_block">
						<h1> <center> SMALL BLOG SYS </center> </h1>
					</div>
				</div>
			</div>			
		</div>


<!-- FETCHING POINT STARTS -->




<?php
	
  // CONNECTION CHECKING	
	$value=$_POST['catogary'];

	echo $value;

 // CONNETING TO THE MYSQL SERVER	
	$connetion_open = mysql_connect('localhost','root');

	if($connetion_open) { echo " connetion_open";}

 // CONNETING TO THE DATABASE	

	$database_open = mysql_select_db('blog_box');

	if($database_open) {echo " database_open";}


	$query = 'select * from posts where catagory="'.$value.'"';

	echo '<br>'.$query.'</br>';

	$data=mysql_query($query);

	 

	while( $row =mysql_fetch_assoc($data) ){
		echo $row['title'].'</br>';
	}
	

?>




</body>
</html>