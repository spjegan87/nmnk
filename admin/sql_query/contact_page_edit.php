<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	$id= $_GET['id'];
	// Personal Information
	$contactphone_1 = $_POST['contactphone_1'];
	$contactphone_2 = $_POST['contactphone_2'];
	$contactphone_3 = $_POST['contactphone_3'];
	$contactmail = $_POST['contactmail'];
	$contactaddress = $_POST['contactaddress'];
	$googlemaplink = $_POST['googlemaplink'];

	//Update query
	$sql ="UPDATE contact_page_details SET contactphone_1='$contactphone_1', contactphone_2='$contactphone_2', contactphone_3='$contactphone_3', contactmail='$contactmail', contactaddress='$contactaddress', googlemaplink='$googlemaplink' WHERE id='$id' ";
	
	
	$query = mysql_query($sql);
	
	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=contactpageupdated');
?>