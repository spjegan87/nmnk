<?php 
	include('../../config/config.php');
?>
<div class='dashboard-container'>
	<!-- Members Details Start -->
	<h4 class="header-title">New Blood Donor Registration <a href="index.php?page=donordetails.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>View Blood Donor Details</a></h4>
	<form action="../sql_query/donor_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
		<div class='panel-type-bg'>
			<!-- Personal Info -->
			<h4 class="inner-title">Donor Information</h4>
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="dname" class='mandatory'>Name</label>
						<input type="text" class="form-control" id="dname" name='dname' placeholder='Enter donor name'>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="dbg" class='mandatory'>Blood Group</label>
						<select id="dbg" class="form-control" name="dbg" required>
							<option value="" selected="">Please choose blood group</option>
							<option value="A1-">A1-</option>
							<option value="A1+">A1+</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="A1B-">A1B-</option>
							<option value="A1B+">A1B+</option>
							<option value="A2-">A2-</option>
							<option value="A2+">A2+</option>
							<option value="A2B-">A2B-</option>
							<option value="A2B+">A2B+</option>
							<option value="B-">B-</option>
							<option value="B+">B+</option>
							<option value="B1+">B1+</option>
							<option value="O-">O-</option>
							<option value="O+">O+</option>
						</select>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="phoneno" class='mandatory'>Phono Number</label>
						<input type="text" class="form-control" id="phoneno" name='phoneno' placeholder='Enter phone number'>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="natplace" class='mandatory'>Native Place</label>
						<input type="text" class="form-control" id="natplace" name='natplace' placeholder='Enter donor native place'>
					</div>
				</div>
				<div class='col-sm-3' style="display:none;">
					<div class="form-group">
						<label for="status" class='mandatory'>Active</label>
						<input type="text" class="form-control" id="status" name='status' value="Active">
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<div class='row'>
				<div class='text-center'>
					<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
				</div><br />
			</div>
		</div>
	</form>
	<!-- Members Details End -->
</div>