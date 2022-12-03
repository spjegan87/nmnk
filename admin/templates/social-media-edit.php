<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from poster_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/poster_updates_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Media Updates  <a href="index.php?page=allposters.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back to see all posters</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="postername">Poster Name</label>
						<input type="text" class="form-control" id='postername' name="postername" placeholder="Enter Subject Name" value="<?php echo $rows['postername'] ?>"/>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="posterdate">Post date</label>
						<label class='calendar'><input type="text" class="form-control number"  name="posterdate" id='date' placeholder="Select date of birtd" required value="<?php echo $rows['posterdate'] ?>"/></label>
					</div>
				</div>
				<div class='col-sm-6'>
					<div class="form-group">
						<label for="photo">Poster Image</label><br />
						<input type="text" id ="cusBrowse" autocomplete="off" class="form-control cus-browse" readonly value="<?php echo $rows['photo'] ?>"/ >
						<input type="button" value="Browse..." class="browse btn">
						<input type="file" style="display:none;" id='photo' name='photo' multiple class='filechange upload-photo'>
						<p class="file-validate"></p>
					</div>	
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<textarea id="postercomments" name="postercomments" rows="4" cols="" class="form-control"placeholder="Enter your comments"><?php echo $rows['postername'] ?></textarea>
					</div>
				</div>
				<div class='col-sm-12'style='display:none;'>
					<div class="form-group">
						<input type="text" value="<?php echo $rows['status'] ?>" name='status'>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>