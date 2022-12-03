<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];

	$sql ="UPDATE webcarousel_register SET status='Inactive' WHERE id='$id'";
	
	echo $sql;
	exit;

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=carouselupdate');
?>