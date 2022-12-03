<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Personal Information
	$indexcontent = $_POST['indexcontent'];

	//Update query
	$sql ="UPDATE web_index_page SET indexcontent='$indexcontent' WHERE id='$id' ";
	
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=web-index-page.php&msg=updated');
?>