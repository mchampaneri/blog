<?php
// starting the page	
 include '..\includes\admin_frame.php';
 

 if(isset($_SESSION["fail"]))
 	{
	echo '<font color="red">"SET THE DATA BEFORE ADDING OR UPDATEING THE FIELD"</font>';
	}

?>



<?php	
// sql connector
include '../../global/includes/sql_connect.php' 

?>
	 <section class="content-header">
          <h1>
            CATEGORY 
            <small>Add / Remove /Update the Categories</small>
          </h1>
         
     </section>

        <!-- Main content -->
        <section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-boarder">
						<h3 class="box-title"> ADD NEW CATEGORY </h3>
							<div class="box-body">
								<form action=".\new_category.php" method="post">
									<div class="form-group">
									<label for="cat_name">New Category Name</label>
									<input type="text"  class="form-control" name="catagory_name"/>
									</div>
									<div class="form-group">
									<label for="">Slug For New Category</label>
									<input type="text"  class="form-control" name="slug"/>
									</div>
									<div class="form-group">
									<input type="submit" value="CREATE" class="btn btn-success lrg">
									</div>
								</form>
							</div>
					</div>
				</div>
			</div>
		</div>

				</br> </br>
			
		
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-boarder">
					<h3 class="box-title">  CATEGORY LIST </h3>

					<div class="box-body">
							
					<table class="table table-hover">
					<tr><th>ID</th><th>NAME</th><th>SLUG</th><th>INITALIZTION_TIME</th><th>UPDATE</th><th>REMOVE</th>
					<?php //GETTING DATA OFTHE TABLE 'catagory' 

						$query = "select * from catagory";

						$result = mysql_query($query,$connetion_open);

						while( $row =mysql_fetch_assoc($result) ){
							echo '<form action="action_catagory.php" method="post">';
							echo '<tr>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td><input type="text" name="catagory_name" value="'.$row['name'].'"></input></td>';
							echo '<td><input type="text" name="slug" value="'.$row['slug'].'"></input></td>';
							echo '<td>'.$row['crate_at'].'</td>';
							echo '<td> <input type="submit" name="change"    value="UPDATE"  class="btn btn-info"> </input></td>';
							echo '<td> <input type="submit" name="delete"    value="REMOVE" class="btn btn-danger"> </input></td>';
							echo '</tr>';
							echo ' <input type="hidden" name="id"    value='.$row['id'].' class="change"> </input>';
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