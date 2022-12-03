<!-- Header included -->
<?php 
	include('../common/header.php');
	include('../config/config.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Header included -->
<body class='login-bg'>
<div class="container-fluid">
	<div class="row">
		<div class="logincontainer">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"><br /><br />
				<div class="login-page-panel">
					<h2 class='shadow-1'>நுழைவு பக்கம்</h2>
					<div class="login-form">
						<form role="form" method="post" action="sql_query/login_query.php">
							<p class="error-txt"><?php if(isset($_GET['msg']) and $_GET['msg'] == 'error') echo "Sorry username password wrong!"; ?></p>
							<div class="form-group">
								<input type="text" class="form-control" name="username" id="email" placeholder="Login Name">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Login Password">
							</div>
							<div class="form-group mar-none">
								<button type="submit" class="btn custom-btn hvr-float-shadow mar-rgt-5">Submit</button> நீங்கள் உறுப்பினர் இல்லையா? <a href="register.php" class='pull-right'>கிளிக் செய்து பதியவும்</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</body>
</html>