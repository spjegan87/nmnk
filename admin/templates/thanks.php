<!-- Header included -->
<?php 
	include('../../config/config.php');
	include('../../common/script.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Header included -->
<div class="row">
	<div class="col-sm-12">
		<div class="admin-thanks text-center">
			<br /><br /><img src="<?php echo $localpath ?>/images/success-tick.png" alt="" /><br /><br />
			<?php
				if($_GET['msg'] == 'updated'){
				echo "<h3>Profile Updated Successfully</h3><br>";
				echo "<script> userdetailpage();</script>"; }
				if($_GET['msg'] == 'thanks'){
				echo "<h3>Registration Successfully</h3><br>";
				echo "<script> userdetailpage();</script>"; }
				if($_GET['msg'] == 'footerupdate'){
				echo "<h3>Your Footer Page Content <br /> Updated Successfully</h3><br>";
				echo '<script>footerpage()</script>';  }
				if($_GET['msg'] == 'footerdelete'){
				echo "<h3>Your Footer Page Content Record <br /> Removed Successfully</h3><br>";
				echo '<script>footerpage()</script>';  }
				if($_GET['msg'] == 'posterupdate'){
				echo '<h3>Your Poster Should Be Stored in <br /> "We Can Do It Server Successfully."</h3><br>';
				echo '<script>socialmedia()</script>';  }
				if($_GET['msg'] == 'serviceupdate'){
				echo '<h3>Your Social Service Details Should Be Stored in <br /> "We Can Do It Server Successfully."</h3><br>';
				echo '<script>socialservice()</script>';  }
				if($_GET['msg'] == 'posterdelete'){
				echo '<h3>Your Poster Removed Successfully."</h3><br>';
				echo '<script>socialmedia()</script>';  }
				if($_GET['msg'] == 'contactpageupdated'){
				echo '<h3>Contact Page Updated Successfully."</h3><br>';
				echo '<script>contactpage()</script>';  }
				if($_GET['msg'] == 'servicedelete'){
				echo '<h3>Your Poster Removed Successfully."</h3><br>';
				echo '<script>socialservice()</script>'; }
				// Carousel Messages //
				if($_GET['msg'] == 'carouselupdate'){
				echo '<h3>Carousel Content Updated Successfully."</h3><br>';
				echo '<script>carouselpage()</script>';  }
				if($_GET['msg'] == 'donorthanks'){
				echo '<h3>Donor Details Updated Successfully."</h3><br>';
				echo '<script>donorthanks()</script>';  }
			?>
			<p>Thank you for submitting your registration information.</p>
		</div>
	</div>
</div>
