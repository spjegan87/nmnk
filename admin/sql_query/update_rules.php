<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$id=$_GET['id'];
	$rules = $_POST['rules'];

	$sql ="UPDATE rules_register SET rules='$rules' WHERE id='".$id."'";
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=web-rules.php&msg=added');
?>