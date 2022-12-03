<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Personal Information
	$aboutcontent = $_POST['aboutcontent'];

	//Update query
	$sql ="UPDATE web_about_page SET aboutcontent='$aboutcontent' WHERE id='$id' ";
	
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=web-about-page.php&msg=updated');
?>