<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$rules = $_POST['rules'];
	$status = $_POST['status'];

	$sql ="insert into rules_register (rules,status) values ('$rules','$status')";
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=web-rules.php&msg=added');
?>