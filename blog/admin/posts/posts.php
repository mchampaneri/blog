<?php
// starting the page	
 include '..\includes\admin_frame.php';

?>

<?php	
// sql connector
include '../../global/includes/sql_connect.php' 

?>

<!-- CODES FOR THE POSTS PAGE -->
	<section class="content-header">
          <h1>
            POSTS LIST
            <small>Post list with edit/remove options</small>
          </h1>
         
     </section>

        <!-- Main content -->
							
				
<section class="content">
			
	<div class="row">
			<div class="col-md-12">
								
				<div class="box box-primary">
						<div class="box-header with-boarder">
								<h3 class="box-title"> TOTAL POST </h3>

												<div class="box-body">

											
														<table class="table table-hover">

														<tr><th> ID </th> <th>TITLE</th> <th>SLUG</th> <th>CATAGORY_NAME</th> <th>INITALIZTION_TIME</th><th>UPDATE</th><th>REMOVE</th>
														<?php //GETTING DATA OFTHE TABLE 'catagory' 

															$posts = "select * from posts";

															$load_posts = mysql_query($posts,$connetion_open);
													
															while( $row =mysql_fetch_assoc($load_posts) ){
																
																echo '<form action="./action_posts.php" method="get">';
																echo '<tr>';
																echo '<td> '.$row['id'].'</td>';
																echo '<td> '.$row['name'].'</td>';
																echo '<td> '.$row['slug'].'</td>';
																			
																			//ID TO NAME CONVERTION	
																					$category_name = "select * from catagory where id=".$row['catagory_id'];
																			//				echo $category_name;
																					$load_catagory_name = mysql_query($category_name,$connetion_open);
																					
																					$name = "Deleted Category";
																					 while($cat_name=mysql_fetch_assoc($load_catagory_name))
																					 {
																							
																							$name = $cat_name['name'];
																															
																					 }

																					  echo '<td> '.$name.'</td>';
																							
																
																echo '<td> '.$row['create_at'].'</td>';
																echo '<input type="hidden" name="id"    value='.$row['id'].' class="change"> </input>';
																echo '<td><input type="submit" name="change"    value="UPDATE" class="btn btn-info"> </input>  </td>';
																echo '<td><input type="submit" name="delete"    value="REMOVE" class="btn btn-danger" > </input> </td>';
																echo '</tr>';				
																echo '</form>';
															
															}

														?>
														</table>
								
												</div>
						</div>
				</div>
			</div>
	</div>

</section>



<?php
// closing the page
	include '..\includes\admin_frame_close.php';
?>