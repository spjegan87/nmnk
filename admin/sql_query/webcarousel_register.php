<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$carouseltitle = $_POST['carouseltitle'];
	$carouselcomment = $_POST['carouselcomment'];
	$status = $_POST['status'];

	$sql ="insert into webcarousel_register (carouseltitle,carouselcomment,status) values ('$carouseltitle','$carouselcomment','$status')";
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=carouselupdate');
?>