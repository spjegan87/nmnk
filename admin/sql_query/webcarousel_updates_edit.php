<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$carouseltitle = $_POST['carouseltitle'];
	$carouselcomment = $_POST['carouselcomment'];
	$status = $_POST['status'];

	$sql ="UPDATE webcarousel_register SET carouseltitle='$carouseltitle', carouselcomment='$carouselcomment', status='$status' WHERE id='".$id."'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=carouselupdate');
?>