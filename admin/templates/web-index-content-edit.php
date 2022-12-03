<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	$sql = "select * from web_index_content";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<h4 class="header-title">Website Index Content Page<a href="index.php?page=web-index-content.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a></h4>
<form action="../sql_query/web_index_content_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class="panel-type-bg">
		<h4 class="inner-title">Website Home Page Intro Content</h4>
		<div class='row'>
			<div class="col-sm-12">
				<div class="contact-display">
					<textarea id="indexintro" name="indexintro" rows="4" cols="" class="form-control"placeholder="Enter your comments" required><?php echo $rows['indexintro'] ?></textarea>
				</div><br /><br />
			</div>
		</div>
		<h4 class="inner-title">Website Home Page Who Am I Content</h4>
		<div class='row'>
			<div class="col-sm-12">
				<div class="contact-display">
					<textarea id="indexwhoami" name="indexwhoami" rows="4" cols="" class="form-control"placeholder="Enter your comments" required><?php echo $rows['indexwhoami'] ?></textarea>
				</div><br /><br />
			</div>
		</div>
		<h4 class="inner-title">Website Home Page Our Aim Content</h4>
		<div class='row'>
			<div class="col-sm-12">
				<div class="contact-display">
					<textarea id="indexaim" name="indexaim" rows="4" cols="" class="form-control"placeholder="Enter your comments" required><?php echo $rows['indexaim'] ?></textarea>
				</div><br /><br />
			</div>
		</div>
		<div class="col-sm-12">
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</form>