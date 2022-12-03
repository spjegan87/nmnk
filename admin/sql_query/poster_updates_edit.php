<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$postername = $_POST['postername'];
	$posterdate = $_POST['posterdate'];
	$photo = $_FILES['photo']['name'];
	$postercomments = $_POST['postercomments'];
	$status = $_POST['status'];

	$sql ="UPDATE poster_register SET postername='$postername', posterdate='$posterdate', photo='$photo', postercomments='$postercomments', status='$status' WHERE id='$id'";

	$directory = $_SERVER['DOCUMENT_ROOT']."/MyLearning/wecandoit/admin/posterphotos/";
	
	$upload = $directory.$_FILES['photo']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	
	$query = mysql_query($sql);

	header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=posterupdate');
?>