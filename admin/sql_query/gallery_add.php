<?php
echo '<pre>';
	ini_set('display_errors', '0');
	include('../../config/config.php');
	//print_r($_POST);
	//exit;
	/* Create a fodler 
	$gallerytitle = $_POST['gallerytitle'];
	$gallerystatus = $_POST['status'];
	foreach($_POST as $key => $value){
		if(strpos($key, 'photo') !== false){
			$photo[] = $value;
		}
		if(strpos($key, 'gallerytext')!== false)
		{
			$gallerytext[] = $value;
		}
	}*/
	$photo = $_POST['photo'];
	$photo1 = $_POST['photo1'];
	$photo2 = $_POST['photo2'];
	$photo3 = $_POST['photo3'];
	$photo4 = $_POST['photo4'];
	$photo5 = $_POST['photo5'];
	$photo6 = $_POST['photo6'];
	$photo7 = $_POST['photo7'];
	$photo8 = $_POST['photo8'];
	$photo9 = $_POST['photo9'];
	$gallerytext = $_POST['gallerytext'];
	$gallerytext1 = $_POST['gallerytext1'];
	$gallerytext2 = $_POST['gallerytext2'];
	$gallerytext3 = $_POST['gallerytext3'];
	$gallerytext4 = $_POST['gallerytext4'];
	$gallerytext5 = $_POST['gallerytext5'];
	$gallerytext6 = $_POST['gallerytext6'];
	$gallerytext7 = $_POST['gallerytext7'];
	$gallerytext8 = $_POST['gallerytext8'];
	$gallerytext9 = $_POST['gallerytext9'];
	$gallerytitle = $_POST['gallerytitle'];
	$gallerystatus = $_POST['status'];
	
	$sql = "insert into gallery_register (gallerytitle,photo,photo1,photo2,photo3,photo4,photo5,photo6,photo7,photo8,photo9,gallerytext,gallerytext1,gallerytext2,gallerytext3,gallerytext4,gallerytext5,gallerytext6,gallerytext7,gallerytext8,gallerytext9,status)
	values ('$gallerytitle','$photo','$photo1','$photo2','$photo3','$photo4','$photo5','$photo6','$photo7','$photo8','$photo9','$gallerytext','$gallerytext1','$gallerytext2','$gallerytext3','$gallerytext4','$gallerytext5','$gallerytext6','$gallerytext7','$gallerytext8','$gallerytext9','$gallerystatus')";
	
	$directory = $_SERVER['DOCUMENT_ROOT']."/admin/galleryphotos/";

	//$upload = $directory.''.date('dmYHs').'.jpg';
	$upload = $directory.$_FILES['photo']['name'];
	$upload1 = $directory.$_FILES['photo1']['name'];
	$upload2 = $directory.$_FILES['photo2']['name'];
	$upload3 = $directory.$_FILES['photo3']['name'];
	$upload4 = $directory.$_FILES['photo4']['name'];
	$upload5 = $directory.$_FILES['photo5']['name'];
	$upload6 = $directory.$_FILES['photo6']['name'];
	$upload7 = $directory.$_FILES['photo7']['name'];
	$upload8 = $directory.$_FILES['photo8']['name'];
	$upload9 = $directory.$_FILES['photo9']['name'];

	$moving = move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
	$moving = move_uploaded_file($_FILES['photo1']['tmp_name'], $upload1);
	$moving = move_uploaded_file($_FILES['photo2']['tmp_name'], $upload2);
	$moving = move_uploaded_file($_FILES['photo3']['tmp_name'], $upload3);
	$moving = move_uploaded_file($_FILES['photo4']['tmp_name'], $upload4);
	$moving = move_uploaded_file($_FILES['photo5']['tmp_name'], $upload5);
	$moving = move_uploaded_file($_FILES['photo6']['tmp_name'], $upload6);
	$moving = move_uploaded_file($_FILES['photo7']['tmp_name'], $upload7);
	$moving = move_uploaded_file($_FILES['photo8']['tmp_name'], $upload8);
	$moving = move_uploaded_file($_FILES['photo9']['tmp_name'], $upload9);
	
	$query = mysql_query($sql);
	header('location:'.$localpath.'admin/templates/index.php?page=allgallery.php&msg=imgupdate');
?>