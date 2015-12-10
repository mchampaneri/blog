<?php include '../includes/admin_frame.php';
	
	require '../../global/includes/sql_connect.php';

	$query = "SELECT * FROM posts WHERE id=".$_GET['id'];

	$result = mysql_query($query,$connetion_open);

	while ($row = mysql_fetch_assoc($result))
	{
		$name= $row['name'];
		$slug =$row['slug'];
		$catagory_id = $row['catagory_id'];
		$editor1 = $row['discription'];

		
	}

	if(!$result)
		echo "fail";
		
?>


 <section class="content-header">
          <h1>
            UPDATE THE POST
            <small> UPDATE THE POST CONENT</small>
          </h1>
         
 </section>

	<script src="../ckeditor/ckeditor.js"></script>

 
<section class="content">
		 <div class="row">
		 	
				<div class="col-md-12">
					
					<div class="box box-primary">
						<div class="box-header with-boarder">
							<h3 class="box-title"> UPDATE POST </h3>

							<div class="box-body">
								<form action="./action_posts.php" method="post" enctype="multipart/form-data">
											<div class="form-group">
											<label for="">POST NAME</label>
											<input type="text" placeholder="title" class="form-control" name="post_name" value="<?php echo $name; ?>" />
											</div>
											<div class="form-group">
											<label for="">POST SLUG</label>
											<input type="text" placeholder="slug" class="form-control" name="slug" value="<?php echo $slug; ?>"/>
											</div>
											<div class="form-group">	
											<input type="hidden" name="id"    value="<?php echo $_GET['id'] ?>" class="change"> </input>	
											</div>
											<div class="form-group">
											<label for="">SELECT CATEGORY</label>
											<select class="form-control" name="catagory_id" value="<?php echo $catagory_id; ?>">
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
											</br><label for="">Discription for blog</label>
												 <textarea name="editor1" id="editor1" rows="10" cols="80">
					                                                  <?php echo $editor1; ?>              
					                   			 </textarea>
					                   			 <div class="form-group">
					                   			 <label for="">PROFILE IMAGE</label>
					                   			 <input type="file" name="image" class="form-control"/>
					                   			 </div>
					                   		</br>
					                   			<div class="form-group">
												<input type="submit" value="UPDATE" name="update" class="btn btn-success"/>
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