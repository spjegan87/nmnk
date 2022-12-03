<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from webcarousel_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/webcarousel_updates_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Website Carousel Content Updates<a href="index.php?page=web-allcarousel.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>View All Carousel Cotent</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-10'>
					<div class="form-group">
						<label for="carouseltitle" class='mandatory'>Carousel Title</label>
						<input type="text" class="form-control" id="carouseltitle" name='carouseltitle' placeholder='Enter carousel title' value='<?php echo $rows['carouseltitle'] ?>' required>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="carouselcomment" class='mandatory'>Carousel Content</label>
						<textarea id="carouselcomment" name="carouselcomment" rows="4" cols="" class="form-control"placeholder="Enter carousel content" required><?php echo $rows['carouselcomment'] ?></textarea>
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
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Update</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>