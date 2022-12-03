<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');

	//$sql = "insert into web_index_page (indexcontent) value ('1')";
	
	$sql = "select * from web_index_page";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<h4 class="header-title">Website Index Page<a href="index.php?page=web-index-edit.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Edit Web Index Page</a></h4>
<div class="panel-type-bg">
	<div class="col-sm-6">
		<div class="contact-display">
			<span class='text-success'><?php if($_GET['msg'] == 'updated') { echo 'Content updated successfully.'; }?></span>
			<p><?php echo $rows['indexcontent'] ?></p>
		</div>
	</div>
	<div class="clearfix"></div>
</div>