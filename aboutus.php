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
				<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு - எங்களைப் பற்றி</h2>
				<hr />
				<div class='col-sm-4 text-center'>
					<img src="images/ourlogos.png" alt="" class='img-responsive' />
				</div>
				<div class='col-sm-8'>
					<p class='about-content'><?php echo $aboutrows['aboutcontent'] ?></p>
				</div>
				<div class='clearfix'></div>
			</div>
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->