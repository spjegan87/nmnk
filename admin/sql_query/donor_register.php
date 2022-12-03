<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$dname = $_POST['dname'];
	$dbg = $_POST['dbg'];
	$phoneno = $_POST['phoneno'];
	$natplace = $_POST['natplace'];
	$status = $_POST['status'];

	$sql ="insert into donor_register (dname,dbg,phoneno,natplace,status) values ('$dname','$dbg','$phoneno','$natplace','$status')";

	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=donorthanks');
?>