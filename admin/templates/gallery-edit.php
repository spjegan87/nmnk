<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from gallery_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/gallery_updates_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Gallery Updates  <a href="index.php?page=allgallery.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>View All Posters</a></h4>
		<div class='panel-type-bg gallery-edit'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-5'>
					<div class="form-group">
						<label for="gallerytitle" class='textindex'>Gallery Title</label><br />
						<input type="text" name='gallerytitle' autocomplete="off" value="<?php echo $rows['gallerytitle'] ?>" class="form-control" />
					</div>
				</div>
				<div class='clearfix'></div>
				<!-- 0 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo' autocomplete="off" value="<?php echo $rows['photo'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo' multiple class='filechange upload-photo' value='<?php echo $rows['photo'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext' autocomplete="off" value="<?php echo $rows['gallerytext'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 1 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo1" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo1' autocomplete="off" value="<?php echo $rows['photo1'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo1' multiple class='filechange upload-photo' value='<?php echo $rows['photo1'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext1" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext1' autocomplete="off" value="<?php echo $rows['gallerytext1'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 2 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo2" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo2' autocomplete="off" value="<?php echo $rows['photo2'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo2' multiple class='filechange upload-photo' value='<?php echo $rows['photo2'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext2" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext2' autocomplete="off" value="<?php echo $rows['gallerytext2'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 3 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo3" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo3' autocomplete="off" value="<?php echo $rows['photo3'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo3' multiple class='filechange upload-photo' value='<?php echo $rows['photo3'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext3" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext3' autocomplete="off" value="<?php echo $rows['gallerytext3'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 4 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo4" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo4' autocomplete="off" value="<?php echo $rows['photo4'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo4' multiple class='filechange upload-photo' value='<?php echo $rows['photo4'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext4" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext4' autocomplete="off" value="<?php echo $rows['gallerytext4'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 5 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo5" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo5' autocomplete="off" value="<?php echo $rows['photo5'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo5' multiple class='filechange upload-photo' value='<?php echo $rows['photo5'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext5" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext5' autocomplete="off" value="<?php echo $rows['gallerytext5'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 6 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo6" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo6' autocomplete="off" value="<?php echo $rows['photo6'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo6' multiple class='filechange upload-photo' value='<?php echo $rows['photo6'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext6" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext6' autocomplete="off" value="<?php echo $rows['gallerytext6'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 7 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo7" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo7' autocomplete="off" value="<?php echo $rows['photo7'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo7' multiple class='filechange upload-photo' value='<?php echo $rows['photo7'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext7" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext7' autocomplete="off" value="<?php echo $rows['gallerytext7'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 8 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo8" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo8' autocomplete="off" value="<?php echo $rows['photo8'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo8' multiple class='filechange upload-photo' value='<?php echo $rows['photo8'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext8" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext8' autocomplete="off" value="<?php echo $rows['gallerytext8'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 9 -->
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo9" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo9' autocomplete="off" value="<?php echo $rows['photo9'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo9' multiple class='filechange upload-photo' value='<?php echo $rows['photo9'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext9" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext9' autocomplete="off" value="<?php echo $rows['gallerytext9'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<!-- 
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo10" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo10' autocomplete="off" value="<?php echo $rows['photo10'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo10' multiple class='filechange upload-photo' value='<?php echo $rows['photo10'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext10" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext10' autocomplete="off" value="<?php echo $rows['gallerytext10'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo11" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo11' autocomplete="off" value="<?php echo $rows['photo11'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo11' multiple class='filechange upload-photo' value='<?php echo $rows['photo11'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext11" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext11' autocomplete="off" value="<?php echo $rows['gallerytext11'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo12" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo12' autocomplete="off" value="<?php echo $rows['photo12'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo12' multiple class='filechange upload-photo' value='<?php echo $rows['photo12'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext12" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext12' autocomplete="off" value="<?php echo $rows['gallerytext12'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo13" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo13' autocomplete="off" value="<?php echo $rows['photo13'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo13' multiple class='filechange upload-photo' value='<?php echo $rows['photo13'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext13" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext13' autocomplete="off" value="<?php echo $rows['gallerytext13'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div>
				<div class='clone'>
					<div class='col-sm-5'>
						<div class="form-group gallery">
							<label for="photo14" class='textindex'>Gallery Image</label><br />
							<input type="text" name='photo14' autocomplete="off" value="<?php echo $rows['photo14'] ?>" class="form-control cus-browse" readonly / >
							<input type="button" value="Browse..." class="browse btn">
							<input type="file" style="display:none;" name='photo14' multiple class='filechange upload-photo' value='<?php echo $rows['photo14'] ?>'>
							<p class="file-validate"></p>
						</div>
					</div>
					<div class='col-sm-4'>
						<div class="form-group">
							<label for="gallerytext14" class='textindex'>Gallery Text</label><br />
							<input type="text" name='gallerytext14' autocomplete="off" value="<?php echo $rows['gallerytext14'] ?>" class="form-control gallertext"/ >
						</div>
					</div>
					<div class='clearfix'></div>
				</div> -->
				<div class='clearfix'></div>
				<div class='col-sm-2'>
					<div class="form-group">
						<label for="gallerytitle" class='textindex'>Gallery Status</label><br />
						<select class="form-control" name="status">
							<option value="Y" <?php if($rows['status']=="Y"){ echo "selected";}?>>Active</option>
							<option value="N" <?php if($rows['status']=="N"){ echo "selected";}?>>Inactive</option>
						</select>
					</div>
				</div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>