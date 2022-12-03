<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	// Personal Information
	$teamaddress = $_POST['teamaddress'];
	$latestproj_1 = $_POST['latestproj_1'];
	$latestproj_2 = $_POST['latestproj_2'];
	$upcomingproj_1 = $_POST['upcomingproj_1'];
	$upcomingproj_2 = $_POST['upcomingproj_2'];

	$sql ="UPDATE footerpage_updates SET address='$teamaddress',latestproj_1='$latestproj_1' ,latestproj_2='$latestproj_2',upcomingproj_1='$upcomingproj_1',upcomingproj_2='$upcomingproj_2' WHERE id='$id'";

	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=footerupdate');
?>