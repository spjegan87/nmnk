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
				<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு உறுப்பினர்கள் சமூக செயல்கள்</h2>
				<?php 
					while($servicerows = mysql_fetch_array($servicequery))
					{
				?>
				<hr />
				<div class="custom-artical">
					<div class="col-lg-3 artical-img">
						<img src="admin/servicephotos/<?php echo $servicerows['photo'] ?>" alt="" class="img-responsive "/>
					</div>
					<div class="artical-content col-lg-9">
						<h3 class='mar-none'><?php echo $servicerows['servicename'] ?></h3>
						<label class='article-date'>
							<i class="fa fa-calendar mar-rgt-5"></i> <?php echo $servicerows['servicedate'] ?>
						</label>
						<p><?php echo $servicerows['servicecomments'] ?></p>
						<a href="serviceview.php?id=<?php echo $servicerows['id'] ?>" class="btn custom-btn hvr-float-shadow">மேலும் படிக்க...</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->