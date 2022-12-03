<?php 
	include('../../config/config.php');
	include('../../common/pagequery.php');
	$delid = $_GET['del'];
	mysql_query("UPDATE rules_register SET status='Inactive' WHERE id='$delid'");
?>
<div class='dashboard-container'>
	<!-- Members Details Start -->
	<h4 class="header-title">Team Rules <a href="index.php?page=web-rules.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Back</a></h4>
	<form action="../sql_query/rules_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
		<div class='panel-type-bg'>
			<!-- Personal Info -->
			<div class='row'>
				<div class='col-sm-12'>
					<div class="form-group">
						<textarea class="form-control" name='rules' rows='5' placeholder='Enter team rule'></textarea>
					</div>
				</div>
				<div class='col-sm-2' style='display:none;'>
					<div class="form-group">
						<input type='text' name='status' value='Active'>
					</div>
				</div>
				<div class='clearfix'></div>
				<div class='text-center'>
					<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
				</div><br />
				<div class='col-sm-12'>
					<p class='success'><?php if($_GET['msg'] == 'added') { echo 'Your rule updated successfully.'; } ?></p>
					<table class='table table-bordered admin-table'>
						<tr>
							<th width='80'>Rules No</th>
							<th>Rules </th>
							<th width='100'>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($rulequery))
							{
						?>
						<tr>
							<td><?php echo $rulecount++ ?></td>
							<td><?php echo $rowsdb['rules'] ?></td>
							<td><a href="index.php?page=web-rules-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'></i></a><a href='index.php?page=web-rules.php&del=<?php echo $rowsdb['id'] ?>' type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($rulecount == 0) echo "hide"; ?>' title='Delete Poster Details' name='delete' value='<?php echo $rowsdb['id'] ?>' onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'></i></a></td>
						</tr>
						<?php
							}
							if($rulecount == 1)
							{
						?>
								<tr><td class='text-center text-danger' colspan='3'>No record found</td></tr>
						<?php
							}
						?>
						<tr class="no-data">
							<td colspan="3" class="text-center">
								No record found.
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class='clearfix'></div>
				</div>
			<!-- <p class='text-success'><?php if($_GET['msg'] == 'added') { echo 'Your rules added successfully.'; } ?></p> -->

		</div>
	</form>
	<!-- Members Details End -->
</div>