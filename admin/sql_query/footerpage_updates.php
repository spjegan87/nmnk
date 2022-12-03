<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$teamaddress = $_POST['teamaddress'];
	$latestproj_1 = $_POST['latestproj_1'];
	$latestproj_2 = $_POST['latestproj_2'];
	$upcomingproj_1 = $_POST['upcomingproj_1'];
	$upcomingproj_2 = $_POST['upcomingproj_2'];
	$status = $_POST['status'];

	$getCount = mysql_query("select * from footerpage_updates");
	$count = mysql_num_rows($getCount);

	if($count > 0 )
	{
		$sql ="insert into footerpage_updates (address,latestproj_1,latestproj_2,upcomingproj_1,upcomingproj_2,status) values ('$teamaddress','$latestproj_1','$latestproj_2','$upcomingproj_1','$upcomingproj_2','$status')";
		$query = mysql_query($sql);
	}
	if($count > 2)
	{
		// Here should be automatically deleted row in database;
		$autodeletesql = "DELETE FROM footerpage_updates WHERE id < (SELECT * FROM (SELECT (MAX(id)-2) FROM footerpage_updates ) AS a)";
		$query = mysql_query($autodeletesql);
	}

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=footerupdate');
?>