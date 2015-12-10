<?php
// starting the page	
 include '..\includes\admin_frame.php';

?>

<?php	
// sql connector
include '../../global/includes/sql_connect.php' 

?>
	 <section class="content-header">
          <h1>
            DASHBOARD
            <small>Gives you detail about the current status of the blog</small>
          </h1>
         
        </section>

        <!-- Main content -->
   <section class="content">
   		<div class="row">
					
					<a href="../posts/posts.php">
						<div class="col-md-3">
							<div class="info-box">
								TOTAL POSTS : 
								<div class="info-box-content">
								<?php 
									$query = "select * from posts";

									$result = mysql_query($query,$connetion_open);
									$rows =	mysql_num_rows($result);
										echo '<h2>'.$rows.'</h2>';
									
								 ?>
								 </div>
							</div>
						</div>
					</a>

					<a href="../category/catagory.php">
					<div class="col-md-3">
							<div class="info-box">
								TOTAL CATEGORIES : 
								<div class="info-box-content">
								<?php 

									$query = "select * from catagory";
									$result = mysql_query($query,$connetion_open);
									$rows =	mysql_num_rows($result);
										echo '<h2>'.$rows.'</h2>';
									mysql_close();
								 ?>
								 </div>
							</div>
						</div>



						
					

		
		</div>
	</section>

<?php
// closing the page
	include '..\includes\admin_frame_close.php';
?>