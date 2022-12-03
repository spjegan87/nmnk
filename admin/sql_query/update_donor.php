<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Personal Information
	$dname = $_POST['dname'];
	$dbg = $_POST['dbg'];
	$phoneno = $_POST['phoneno'];
	$natplace = $_POST['natplace'];
	$status = $_POST['status'];

	$sql ="UPDATE donor_register SET dname='$dname',dbg='$dbg',phoneno='$phoneno',natplace='$natplace',status='$status' WHERE id='$id' ";

	$query = mysql_query($sql);
	
	#header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=donorthanks');
	header('location:'.$localpath.'/admin/templates/index.php?page=donordetails.php');
?>