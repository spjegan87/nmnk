<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	// Personal Information
	$postername = $_POST['postername'];
	$posterdate = $_POST['posterdate'];
	$photo = $_FILES['photo']['name'];
	$postercomments = $_POST['postercomments'];
	$status = $_POST['status'];

	$sql ="insert into poster_register (postername,posterdate,photo,postercomments,status) values ('$postername','$posterdate','$photo','$postercomments','$status')";
	
	$directory = $_SERVER['DOCUMENT_ROOT']."/MyLearning/wecandoit/admin/posterphotos/";
	
	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=posterupdate');
?>