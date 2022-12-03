<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');

	#$sql = "insert into web_index_content (indexintro,indexwhoami,indexaim) value ('1','2','3')";
	
	$sql = "select * from web_index_content";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<h4 class="header-title">Website Index Content Page<a href="index.php?page=web-index-content-edit.php" class='pull-right icons'><i class="fa fa-pencil" aria-hidden="true"></i>Edit Web Index Content Page</a></h4>
<div class="panel-type-bg">
	<span class='text-success'><?php if($_GET['msg'] == 'updated') { echo 'Content updated successfully.'; }?></span>
	<h4 class="inner-title">Website Home Page Intro Content</h4>
	<div class="col-sm-12">
		<div class="contact-display">
			<p><?php echo $rows['indexintro'] ?></p>
		</div><br /><br />
	</div>
	<h4 class="inner-title">Website Home Page Who Am I Content</h4>
	<div class="col-sm-12">
		<div class="contact-display">
			<p><?php echo $rows['indexwhoami'] ?></p>
		</div><br /><br />
	</div>
	<h4 class="inner-title">Website Home Page Our Aim Content</h4>
	<div class="col-sm-12">
		<div class="contact-display">
			<p><?php echo $rows['indexaim'] ?></p>
		</div><br /><br />
	</div>
	<div class="clearfix"></div>
</div>