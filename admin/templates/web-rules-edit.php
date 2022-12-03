<?php 
	include('../../config/config.php');
	ini_set('display_errors', '0');
	$id= $_GET['id'];
	$sql = mysql_query("select * from rules_register where id='".$id."'");
	$result = mysql_fetch_array($sql);
?>
<div class='dashboard-container'>
	<!-- Members Details Start -->
	<h4 class="header-title">Team Rules <a href="index.php?page=web-rules.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a></h4>
	<form action="../sql_query/update_rules.php?id=<?php echo $result['id'] ?>" method="post" enctype="multipart/form-data" class="form" role="form">
		<div class='panel-type-bg'>
			<!-- Personal Info -->
			<div class='row'>
				<div class='col-sm-12'>
					<div class="form-group">
						<textarea class="form-control" name='rules' rows='5' placeholder='Enter team rule'><?php echo $result['rules'] ?></textarea>
					</div>
				</div>
				<div class='col-sm-2' style='display:none;'>
					<div class="form-group">
						<input type='text' name='status' value='Active'>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='text-center'>
					<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Update</button>
				</div><br />
			</div>
			<!-- <p class='text-success'><?php if($_GET['msg'] == 'added') { echo 'Your rules added successfully.'; } ?></p> -->

		</div>
	</form>
	<!-- Members Details End -->
</div>