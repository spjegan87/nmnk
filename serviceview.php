<!-- Header included -->
<?php 
	include('common/header.php');
	include('config/config.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
	$id = $_GET['id']; 
	$disquery = mysql_query("select * from service_register where id='".$id."'"); 
	$result = mysql_fetch_array($disquery);
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
			<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு உறுப்பினர்கள் சமூக செயல்கள் <a href="service.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a></h2><hr />
				<div class="col-lg-3 artical-img">
					<img src="admin/servicephotos/<?php echo $result['photo'] ?>" alt="" class="img-responsive "/>
				</div>
				<div class="artical-content expand col-lg-9">
					<h3 class='mar-none'><?php echo $result['servicename'] ?></h3>
					<label class='article-date'>
						<i class="fa fa-calendar mar-rgt-5"></i> <?php echo $result['servicedate'] ?>
					</label>
					<p><?php echo $result['servicecomments'] ?></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>
<!-- Footer included -->