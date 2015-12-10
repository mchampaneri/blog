<div class="menu">
	<ul class="menu-top-left">
			
		<a href="http://localhost/blog/front">
		<li id='all'>ALL</li>
	 	</a>
	<?php

	$connetion_open = mysql_connect('localhost','root');

	// if($connetion_open) { echo " connetion_open";}

 // CONNETING TO THE DATABASE	

	$database_open = mysql_select_db('simple_blog');

	//  if($database_open) {echo " database_open";}


	$query = 'select * from catagory';

	$data=mysql_query($query);

	echo ' ';

	// LOADING DATA 
						
	while( $row =mysql_fetch_assoc($data) ){	
		?>
					 <a href=http://localhost/blog/front/category.php?id=<?php echo $row['id']?> >
					 <li id="<?php echo $row['id']?>" > <?php echo $row['name'] ?> </li>
				    
					 </a>
		
				<?php } ?>
						

	

	</ul>
	<ul class="menu-top-right">
		<a href="http://www.youth4work.com/y/mchampaneri/Manish-H-Champaneri-portfolio" target="new"><li id='about_me'>ABOUT ME</li></a>
		<a href="#"><li id='contact_me'>CONTACT ME</li></a>
	</ul>

	<script src="../js/menu_select.js"></script>
</div>


