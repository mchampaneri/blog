<?php

 // CHECK FOR CATAGORY EXISTANCE
		
  // CONNECTION CHECKING	



 // CONNETING TO THE MYSQL SERVER	
	$connetion_open = mysql_connect('localhost','root');

	// if($connetion_open) { echo " connetion_open";}

 // CONNETING TO THE DATABASE	

	$database_open = mysql_select_db('simple_blog');

 // if($database_open) {echo " database_open";}



?>