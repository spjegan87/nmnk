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
			<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு உறுப்பினர்கள் </h2><hr />
				<div class="col-sm-4">
					<div class="custom-memberlist">
						<form method='post' action='javascript:;'>
						<ul class="nav nav-pills nav-stacked">
							<?php 
								while($memrows = mysql_fetch_array($memquery))
								{
							?>
							<li>
								<a href="membersView.php?id=<?php echo $memrows['id'] ?>" class="active">
									<div class="custom-memberpic">
										<img src="admin/userphotos/<?php echo $memrows['photos'] ?>" alt="<?php echo $memrows['fname'] ?>" title='<?php echo $memrows['fname'] ?>' class="img-responsive"/>
										<p><?php echo $memrows['fname'] ?></p>
									</div>
								</a>
							</li>
							<?php
								}
							?>
						</ul>
						</form>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="custom-membersProfile">
						<div class="custom-profilehead">
							<div class="col-sm-9">
								<?php $id = $_GET['id']; $disquery = mysql_query("select * from admin_register where id='$id'"); $result = mysql_fetch_array($disquery); ?>
								<div class="profileTitle">
									<h1><?php echo $result['fname'] ?> <?php echo $result['lname'] ?></h1> 
									<p class='gp-det'>தனிப்பட்ட விபரம்</p>
									<ul class='details'>
										<li>பிறந்த தேதி : <?php echo $result['date'] ?></li>
										<li>இரத்த வகை : <?php echo $result['bg'] ?></li>
										<li>தொலைபேசி எண் : +91 <?php echo $result['phoneno'] ?></li>
									</ul>
									<p class='gp-det'>குழு விபரம்</p>
									<ul class='details'>
										<li>குழுவில் சேர்ந்த தேதி : <?php echo $result['doj'] ?></li>
										<li>தற்போது குழுவில் : <?php echo $result['status'] ?></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-3">
								<div class='user-photo'>
									<img src="admin/userphotos/<?php echo $result['photos'] ?>" alt="<?php echo $result['fname'] ?>" title='<?php echo $result['fname'] ?>' class="img-responsive"/>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="Custom-details">
							<h3>குழுவில் சேர எனது நோக்கம்.</h3>
							<p><?php echo $result['reason'] ?></p>
						</div>
					</div>
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