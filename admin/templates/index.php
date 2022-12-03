<!-- Header included -->
<?php 
	include('../../common/header.php');
	include('../../config/config.php');
	include('../../config/session-redirect.php');
?>
<!-- Header included -->
<body class='admin-side'>
<div class="container-fluid">
	<div class="row">
		<?php include('admin-header.php') ?>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<div class="admin-menu-main menu-mobile-control">
				<p class="mobile-logout hidden-sm hidden-md hidden-lg">நம்மால் முடியும் <br />நண்பர்கள் குழு  <a href="<?php echo $localpath ?>/config/logout.php"><i class="fa fa-power-off"></i></a></p>
				<div class="boxscroll1">
					<?php include('admin-menu.php') ?>
				</div>
			</div>
		</div>
			<div class="col-sm-10">
			<div class="work-area">
				<?php
					$page = $_GET['page'];
					if (!empty($page)) {
						include($page);
					}
					else {
						include('dashboard.php');
					}
				?>
			</div>
		</div>
	</div>
</div>
<div class="up-arrow">
		<a href="javascript:;"><img src="../../images/up-arrow.png" alt="UP" title="UP" width="52" height="52" class=" img-responsive"></a>
</div>
<!-- Included Script -->
<?php 
	include('../../common/script.php');
?>
<!-- Included Script -->
</body>
</html>