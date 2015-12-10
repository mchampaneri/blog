<?php include '../includes/admin_frame.php';
	
	require '../../global/includes/sql_connect.php';
?>

 <section class="content-header">
          <h1>
            NEW POST
            <small>Use to create new post</small>
          </h1>
         
 </section>

<section class="content">
	<script src="../ckeditor/ckeditor.js"></script>


		 
		 	<div class="row">
		 			<div class="col-md-12">
					
						<div class="box box-primary">
												<div class="box-header with-boarder">
														<h3 class="box-title"> ADD NEW POST </h3>

														<div class="box-body">
													
															<form action="./upload_post.php" method="post" enctype="multipart/form-data">
																<div class="form-group">	
																<label for="">POST NAME</label>
																	<input type="text" class="form-control" name="post_name"  />
																</div>

																<div class="form-group">
																	<label for="">POST SLUG</label>
																	<input type="text" class="form-control" name="slug" />
																</div>
																
																<div class="form-group">
																<label for="">SELECT CATEGORY</label>
																	<select class="form-control" name="catagory_id" >
																		
																			<!-- loading the catagories  -->
																	<?php  

																			$query = "select * from catagory";

																			$result = mysql_query($query,$connetion_open);
																	  
																	  		while( $row =mysql_fetch_assoc($result) ){
																	  			
																	  			echo '<option  class="form-group" value="'.$row['id'].'" cl>'.$row['name'].' </option>';

																	  		}

																	  ?>
																	  </select>
																</div>

										</br>
																<div class="form-group">
																<label for="">Discription for blog</label>
																 <textarea name="editor1" id="editor1" rows="10" cols="80">
									                   			 </textarea>
									                   			 </div>
																
																 <div class="form-group">
											                   			 <label for="">PROFILE IMAGE</label>
											                   			 <input type="file" name="image" class="form-control"/>
											                   			</br>
									                   			</div>
																
																<div class="form-group">
																<input type="submit" value="SAVE" name="new_post" class="btn btn-success"/>
																</div>
															</form>
														</div>
												</div>
						</div>
					</div>

		</div>		
</section>		 

<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'editor1' );
</script>
 


<?php include '../includes/admin_frame_close.php';?>
