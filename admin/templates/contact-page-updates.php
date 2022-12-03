<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');
	$sql = "select * from contact_page_details";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<form action="../sql_query/contact_page_edit.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Contact Details Updates<a href="javascript:;" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>View Current Address</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label>Contact Page Number 1</label>
						<input type="text" name='contactphone_1' class='form-control number' value='<?php echo $rows['contactphone_1'] ?>' placeholder='Enter Contact Number 1' />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label>Contact Page Number 2</label>
						<input type="text" name='contactphone_2' class='form-control number' value='<?php echo $rows['contactphone_2'] ?>' placeholder='Enter Contact Number 2' />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label>Contact Page Number 3</label>
						<input type="text" name='contactphone_3' class='form-control number' value='<?php echo $rows['contactphone_3'] ?>' placeholder='Enter Contact Number 3' />
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label>Contact Mail Id</label>
						<input type="text" name='contactmail' class='form-control' value='<?php echo $rows['contactmail'] ?>' />
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label>Address</label>
						<textarea id="contactaddress" name="contactaddress" rows="4" cols="" class="form-control"placeholder="Enter your address"><?php echo $rows['contactaddress'] ?></textarea>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label>Google Map Updates</label>
						<textarea id="googlemaplink" name="googlemaplink" rows="4" cols="" class="form-control"placeholder="Enter your address"><?php echo $rows['googlemaplink'] ?></textarea>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Update</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>