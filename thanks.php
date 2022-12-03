<!-- Header included -->
<?php 
	include('common/header.php');
	include('config/config.php');
?>
<!-- Header included -->
<script type="text/javascript">
window.setTimeout(function()
{
	window.location.href = 'home.php';
}, 8000);
</script>
<body class='login-bg'>
<div class="login-anim">
	<p class="custom-main-footer">
	<div class="container custom-home-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="thanks before-login">
					<img src="<?php echo $localpath ?>/images/success-tick.png" alt="" /><br />
					<h3 class='text-success'>Registration Successfully</h3><br />
					<p class='text-success'>Thank you for submitting your registration information.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header included -->
<?php 
	include('common/script.php');
?>
<!-- Header included -->