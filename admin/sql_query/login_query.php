<?php
	include('../../config/config.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql ="select * from admin_register where username='$username' and password='$password'";
	
	$query = mysql_query($sql);

	$result = mysql_num_rows($query);

	if($result == 1)
	{
		$_SESSION['username']=$username;
		header('location:'.$localpath.'admin/templates/index.php?page=dashboard.php');

		if($uname == "admin")
		{
			header('location:'.$localpath.'admin/templates/test.php');
		}
	}
	else
	{
		header('location:'.$localpath.'admin/login.php?msg=error');
	}
?>