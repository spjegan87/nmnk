<!-- Header included -->
<?php 
	include('../../common/header.php');
	include('../../config/config.php');
	if(!isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/pages/index.php');
	}
?>
<!-- Header included -->
<body >
<div class="container-fluid">
	<div class="row">
		<?php include('admin-header.php') ?>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<div class="admin-menu-main">
				<div class="boxscroll1">
					<?php include('admin-menu.php') ?>
				</div>
			</div>
		</div>
			<div class="col-sm-10">
			<div class="work-area">
				<h4 class="header-title">Joining</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<!-- Forms -->
				<form class="form-horizontal" name = 'addEmploye' role="form">
					<div class="workarea-forms">
						<div class="tab-container">
							<div class="anim-cont">
								<!-- Personal details -->
								<div class="form-split-cont first">
									<h4 class="form-title">Header Title</h4>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="fname" class="control-label col-sm-4"><span class="mandatory">*</span>First name</label>
											<div class="col-sm-7">
												<input type="text" placeholder="Enter first name" name = 'firstName'  class="form-control" required maxlength="5">
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<h4 class="detail-hdr">Header Title</h4>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- Forms End -->
			</div>
		</div>
	</div>
</div>
<!-- Included Script -->
<?php 
	include('../../common/script.php');
?>
<!-- Included Script -->
</body>
</html>