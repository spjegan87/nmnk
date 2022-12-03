<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	$sql = "select * from contact_page_details";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<h4 class="header-title">Website Footer Page Demo <a href="index.php?page=contact-page-updates.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Edit Contact & Map Details</a></h4>
<div class="panel-type-bg">
	<div class="col-sm-6">
		<div class="contact-display">
			<div class="contact_div">
				<?php echo $rows['contactaddress'] ?>
			</div><br />
			<div class="contact_div">
				<span class="opensans-semibold fnt-16 text-success">தொடர்பு கொள்ள</span><br>
				<span class="contact_text"><?php echo $rows['contactphone_1'] ?>, <?php echo $rows['contactphone_2'] ?>, <?php echo $rows['contactphone_3'] ?></span>
			</div><br />
			<div class="contact_div">
				<span class="opensans-semibold fnt-16 text-success">மின்னஞ்சல்</span><br>
				<a href="mailto:<?php echo $rows['contactmail'] ?>"><?php echo $rows['contactmail'] ?></a>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<iframe src="<?php echo $rows['googlemaplink']  ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="clearfix"></div>
</div>