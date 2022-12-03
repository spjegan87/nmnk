<?php 
	include('../../config/config.php');
	$id= $_GET['id'];
	$sql = "select * from donor_register where id='$id'";
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
?>
<div class='dashboard-container'>
	<!-- Members Details Start -->
	<h4 class="header-title">New Members Registration <a href="index.php?page=userdetails.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a></h4>
	<form action="../sql_query/update_donor.php?id=<?php echo $rows['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
		<div class='panel-type-bg'>
			<!-- Personal Info -->
			<h4 class="inner-title">Personal Information</h4>
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="dname" class='mandatory'>Name</label>
						<input type="text" class="form-control" id="dname" name='dname' placeholder='Enter first name' value="<?php echo $rows['dname'] ?>">
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="dbg" class='mandatory'>Blood Group</label>
						<select id="dbg" class="form-control" name="dbg" required>
							<option value="<?php echo $rows['dbg']; ?>"><?php echo $rows['dbg']; ?></option>
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
						<input type="text" class="form-control" id="phoneno" name='phoneno' placeholder='Enter donor phone number' value="<?php echo $rows['phoneno'] ?>">
					</div>
				</div>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="natplace" class='mandatory'>Native Place</label>
						<input type="text" class="form-control" id="natplace" name='natplace' placeholder='Enter donor native place' value="<?php echo $rows['natplace'] ?>">
					</div>
				</div>
			</div><br />
			<div class='row'>
				<div class='col-sm-3'>
					<div class="form-group">
						<label for="status" class='mandatory'>User Status</label>
						<select id="status" class="form-control" name="status">
							<option value="Active" <?php if($rows['status']=="Active"){ echo "selected";}?>>Active</option>
							<option value="Inactive" <?php if($rows['status']=="Inactive"){ echo "selected";}?>>Inactive</option>
						</select>
					</div>
				</div>
				<div class='clearfix'></div><br />
				<div class='text-center'>
					<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
				</div><br />
			</div>
		</div>
	</form>
	<!-- Members Details End -->
</div>