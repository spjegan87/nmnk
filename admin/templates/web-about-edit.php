<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	$sql = "select * from web_about_page";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<h4 class="header-title">Website Index Page<a href="index.php?page=web-about-edit.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Edit Web Index Page</a></h4>

<form action="../sql_query/web_about_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class="panel-type-bg">
		<h4 class="inner-title">Website Home Page Intro Content</h4>
		<div class='row'>
			<div class="col-sm-12">
				<textarea id="aboutcontent" name="aboutcontent" rows="4" cols="" class="form-control"placeholder="Enter your comments" required><?php echo $rows['aboutcontent'] ?></textarea>
				<br />
				<div class='text-center'>
					<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Update</button>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</form>