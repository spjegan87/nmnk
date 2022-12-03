<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	/* Create a fodler
	$dirPath = "../gallery/".$servicename;
	$result = mkdir($dirPath); */
	$servicename = $_POST['foldername'];
	$photo = $_FILES['photo']['name'];
	
	$sql ="insert into test_register (photos) values ('$photo')";

	$directory = $_SERVER['DOCUMENT_ROOT']."/MyLearning/wecandoit/admin/gallery/";

	$upload = $directory.''.date('dmYHs').'.png';

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
	
	$query = mysql_query($sql);


	#header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=serviceupdate');
?>