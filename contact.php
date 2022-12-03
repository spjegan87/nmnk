<!-- Header included -->
<?php 
	include('common/header.php');
	include('config/config.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Header included -->
<body class="inner-pages">
<div class="container-fluid">
	<div class="row inner-hd-bg">
		<div class="col-sm-12">
			<!-- Header -->
				<?php include("common/menu.php") ?>
			<!-- Header -->
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="inner-cont serivce-page">
				<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு உறுப்பினர்கள் தொடர்பு கொள்ள</h2><hr />
				<div class="row contact_bottom_section">
					<div class="col-md-6 left">
						<div class="contact-display">
							<div class="contact_div">
								<?php echo $contactrows['contactaddress'] ?>
							</div><br />
							<div class="contact_div">
								<span class="opensans-semibold fnt-16 text-success">தொடர்பு கொள்ள</span><br>
								<span class="contact_text">+91 <?php echo $contactrows['contactphone_1'] ?>, +91 <?php echo $contactrows['contactphone_2'] ?>, +91 <?php echo $contactrows['contactphone_3'] ?>, </span>
							</div><br />
							<div class="contact_div">
								<span class="opensans-semibold fnt-16 text-success">மின்னஞ்சல்</span><br>
								<a href="mailto:<?php echo $contactrows['contactmail'] ?>"><?php echo $contactrows['contactmail'] ?></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<form class="form-validate contact-form" action='admin/sql_query/mailer.php' method="post">
							<div class="form-group relative">
								<i class="fa fa-user"></i>
								<input type="text" class="form-control" id="mailername" name="mailername" placeholder="Your Name" required />
							</div>
							<div class="form-group relative">
								<i class="fa fa-envelope"></i>
								<input type="mail" class="form-control" id="mailerid" name="mailerid" placeholder="Your mail id" required />
							</div>
							<div class="form-group relative">
								<i class="fa fa-edit"></i>
								<textarea class="form-control" rows="4" name='comments' placeholder="Enter your comments" required></textarea>
							</div><br />
							<div class="cw-mod-contact-light-buttons">
								<button name="" type="submit" class="btn custom-btn hvr-float-shadow">Submit</button>
							</div>
						</form>
					</div>
					<div class="clearfix>"></div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-12">
						<iframe src="<?php echo $contactrows['googlemaplink'] ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix>"></div>
			</div>
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->