<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	$sql = "select * from web_index_page";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<h4 class="header-title">Website Index Page<a href="index.php?page=web-index-edit.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Edit Web Index Page</a></h4>

<form action="../sql_query/web_index_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class="panel-type-bg">
		<div class="col-sm-12">
			<div class="contact-display">
				<textarea id="indexcontent" name="indexcontent" rows="4" cols="" class="form-control"placeholder="Enter your comments"><?php echo $rows['indexcontent'] ?></textarea>
			</div><br />
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</form>