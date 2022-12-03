<!-- Header included -->
<?php 
	ini_set('display_errors', '0');
	include('common/header.php');
	include('config/config.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'admin/templates/index.php');
	}
	$id = $_GET['id']; 
	$disquery = mysql_query("select * from gallery_register where id='".$id."'"); 
	$result = mysql_fetch_array($disquery);
?>
<!-- Header included -->
<body>
<a class="gallery-logo" href="index.php"><img src="images/logo-img.png" alt="" class="img-responsive" /></a>
<div id="bx-wrapper" class="bx-wrapper">
	<div class="bx-content">
		<h2>நம்மால் முடியும் நண்பர்கள் குழு</h2>
	</div>
	<div class="bx-thumbs">
		<!-- class="bx-thumbs-current" -->
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo1'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo2'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo3'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo4'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo5'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo6'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo7'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo8'] ?>)"></a>
		<a href="javascript:;" style="background-image:url(admin/galleryphotos/<?php echo $result['photo9'] ?>)"></a>
	</div>
	<div class="bx-container">
		<img src="admin/galleryphotos/<?php echo $result['photo'] ?>" alt="<?php echo $result['gallerytext'] ?>" title="<?php echo $result['gallerytext'] ?>"/>

		<img src="admin/galleryphotos/<?php echo $result['photo1'] ?>" alt="<?php echo $result['gallerytext1'] ?>" title="<?php echo $result['gallerytext1'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo2'] ?>" alt="<?php echo $result['gallerytext2'] ?>" title="<?php echo $result['gallerytext2'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo3'] ?>" alt="<?php echo $result['gallerytext3'] ?>" title="<?php echo $result['gallerytext3'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo4'] ?>" alt="<?php echo $result['gallerytext4'] ?>" title="<?php echo $result['gallerytext4'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo5'] ?>" alt="<?php echo $result['gallerytext5'] ?>" title="<?php echo $result['gallerytext5'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo6'] ?>" alt="<?php echo $result['gallerytext6'] ?>" title="<?php echo $result['gallerytext6'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo7'] ?>" alt="<?php echo $result['gallerytext7'] ?>" title="<?php echo $result['gallerytext7'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo8'] ?>" alt="<?php echo $result['gallerytext8'] ?>" title="<?php echo $result['gallerytext8'] ?>"/>
		<img src="admin/galleryphotos/<?php echo $result['photo9'] ?>" alt="<?php echo $result['gallerytext9'] ?>" title="<?php echo $result['gallerytext9'] ?>"/>
	</div>
	<!-- <div class="bx-overlay"></div> -->
</div>
<!-- Header included -->
<?php 
	include('common/slider-script.php');
?>
<!-- Header included -->