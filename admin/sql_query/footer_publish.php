<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	// Personal Information
	$id= $_GET['id'];
	$status = $_POST['status'];

	$sql ="UPDATE footerpage_updates SET status = '$status' WHERE id='$id'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=footerupdate');
?>