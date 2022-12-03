<!-- Header included -->
<?php 
	include('../common/header.php');
?>
<!-- Header included -->
<body class='login-bg'>
<div class="container-fluid">
	<div class="row">
		<div class="logincontainer">
			<div class="col-sm-5"></div>
			<div class="col-sm-6"><br /><br />
				<div class="login-page-panel">
					<h2>New User Registration <a href="login.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a></h2>
					<form action="sql_query/user_register.php" method="post"  enctype="multipart/form-data" class="form" role="form">
						<div class="login-form">
							<div class="form-group">
								<label for="firstname">Name</label>
								<input type="text" class="form-control firstname" placeholder="Enter First name" name="fname" required />
							</div>
							<div class="form-group relative">
								<label for="loginname">Login name</label>
								<input type="text" class="form-control username" id="username" placeholder="Enter your login name" name="username" required onblur="checkname()"/>
								<p class="name_status" class="db-validate"></p>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
							</div>
							<div class="form-group">
								<label for="cpassword">Confirm Password</label>
								<input type="password" class="form-control" id="cpassword" placeholder="Enter your password again" name="cpassword" required>
							</div>
							<div class="form-group relative">
								<label for="emailid">Email ID</label>
								<input type="email" class="form-control mailid" id="emailid" name="email" placeholder="Enter email id" required>
								<span class="msg-error"></span>
							</div>
							<div class="form-group mar-none">
								<button type="submit" class="btn custom-btn mar-none hvr-float-shadow">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- Header included -->
<?php 
	include('../common/script.php');
?>
<!-- Header included -->