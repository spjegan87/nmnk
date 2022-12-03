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
				<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு உறுப்பினர்கள் புகைப்படங்கள்</h2>
				<hr />
				<?php 
					while($galleryrows = mysql_fetch_array($galleryquery))
					{
				?>
				<div class="col-sm-3">
					<p class="members-img">
						<img src="admin/galleryphotos/<?php echo $galleryrows['photo'] ?>" alt="" class="img-responsive "/>
						<a href="galleryView.php?id=<?php echo $galleryrows['id'] ?>" class="custom-btn" title='<?php echo $galleryrows['gallerytitle'] ?>'><?php echo $galleryrows['gallerytitle'] ?></a>
					</p>
				</div>
				<?php
					}
					if($gallerycount == 0)
					{
				?>
						<p class='text-danger text-center'><img src="images/no-image.png" alt="" /><br />No Images Uploaded.</p>
				<?php
					}
				?>
				<div class='clearfix'></div>
			</div>
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->