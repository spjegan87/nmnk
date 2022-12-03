<?php
	ini_set('display_errors', '1');
	include('../../config/config.php');
	
	$id= $_GET['id'];
	$servicename = $_POST['servicename'];
	$servicedate = $_POST['servicedate'];
	$photo = $_POST['photo'];
	$servicecomments = $_POST['servicecomments'];
	$status = $_POST['status'];

	$sql ="UPDATE service_register SET servicename='$servicename', servicedate='$servicedate', photo='$photo', servicecomments='".mysql_real_escape_string($servicecomments)."', status='$status' WHERE id='".$id."'";
	$query = mysql_query($sql);
	//echo mysql_error($connect);
	
	if(isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name'])) {
		$directory = $_SERVER['DOCUMENT_ROOT']."/admin/servicephotos/";
		$upload = $directory.$_FILES['photo']['name'];
		$moving = move_uploaded_file($_FILES['photo']['tmp_name'],$upload);
	}
	
	

	header('location:'.$localpath.'admin/templates/index.php?page=thanks.php&msg=serviceupdate');
?>