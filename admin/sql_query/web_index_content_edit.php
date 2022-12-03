<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Personal Information
	$indexintro = $_POST['indexintro'];
	$indexwhoami = $_POST['indexwhoami'];
	$indexaim = $_POST['indexaim'];

	//Update query
	$sql ="UPDATE web_index_content SET indexintro='$indexintro', indexwhoami='$indexwhoami', indexaim='$indexaim' WHERE id='$id' ";

	
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=web-index-content.php&msg=updated');
?>