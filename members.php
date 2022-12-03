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
			<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு உறுப்பினர்கள் </h2><br />
				<?php 
					while($memrows = mysql_fetch_array($memquery))
					{
				?>
				<div class="col-sm-3">
					<p class="members-img">
						<img src="admin/userphotos/<?php echo $memrows['photos'] ?>" alt="" class="img-responsive" />
						<a href="membersView.php?id=<?php echo $memrows['id'] ?>" class="custom-btn"><?php echo $memrows['fname'] ?></a>
					</p>
				</div>
				<?php
					}
				?>
				<div class="clearfix"></div>
				
			</div>
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->