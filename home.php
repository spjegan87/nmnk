<!-- Header Include -->
<?php 
	include('common/header.php');
	include('config/config.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Header Include -->
<body class='home-bg'>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<!-- Header -->
			<?php include("common/menu.php") ?>
			<!-- Header -->
		</div>
	</div>
	<!-- Carousel Start -->
	<div class="row">
		<div class="col-sm-12">
			<div id="myCarousel" class="carousel slide custom-carousel" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<?php 
						while($carouselrows = mysql_fetch_array($carouselquery))
						{
					?>
					<div class="item">
						<div class="container">
							<h1><?php echo $carouselrows['carouseltitle'] ?></h1>
							<p><?php echo $carouselrows['carouselcomment']?></p>
						</div>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- Carousel End -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="home-wl-txt text-center">
					<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு!!!</h2><br />
					<p><?php echo $homecontentrows['indexintro'] ?></p><br /><br />
				</div>
			</div>
		</div>
	</div>
	<div class="row bg-lightgray">
		<div class="col-s-12 who-are-we bg-lightgray">
			<h2 class="title">நாங்கள் யார் ???</h2><br class='hidden-xs'/><br class='hidden-xs' />
			<p class="lht-30 text-center"><?php echo $homecontentrows['indexwhoami'] ?></p>
		</div>
		<div class="clearfix"></div>
		<?php 
			while($homeserciceimg = mysql_fetch_array($homeservicequery))
			{
		?>
		<div class="col-sm-3 activity-images">
			<img src='admin/servicephotos/<?php  echo $homeserciceimg['photo'] ?>' title='<?php echo $homeserciceimg['servicename'] ?>' alt='<?php echo $homeserciceimg['servicename'] ?>' class='img-responsive' width="100%" height="275"/>
			<a href="serviceview.php?id=<?php echo $homeserciceimg['id'] ?>" title='<?php echo $homeserciceimg['servicename'] ?>'>மேலும் படிக்க..</a>
		</div>
		<?php
			}
		?>
		<div class="clearfix"></div>
		<div class="col-sm-4">
			<div class="msg-box text-center">
				<span class="">1</span><br />
				Only One Village
			</div>
		</div>
		<div class="col-sm-4">
			<div class="msg-box text-center">
				<span class=""><?php echo $memcount ?></span><br />
				Team Members
			</div>
		</div>
		<div class="col-sm-4">
			<div class="msg-box text-center">
				<span class=""><?php echo $servicecount ?></span><br />
				Awareness programs
			</div>
		</div>
		<div class="clearfix"></div>
	</div><br /><br />
	<div class="row ">
		<div class="col-sm-6 text-center">
			<img src="images/our_aim.png" alt="" class="img-responsive" />
		</div>
		<div class="col-sm-6">
			<div class="our-aim-box">
				<h2 class="title text-left">நம்மால் முடியும் நண்பர்கள் குழுவின் நோக்கம்.</h2><br class='hidden-xs'/><br class='hidden-xs' />
				<p class="lht-30"><?php echo $homecontentrows['indexaim'] ?></p><br class='hidden-xs' /><br class='hidden-xs'/>
				<a href="javascript:;" class="btn custom-btn hvr-float-shadow">Read more</a>
			</div>
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->