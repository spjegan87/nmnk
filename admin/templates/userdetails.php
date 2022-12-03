<?php
	include('../../config/config.php');
	include('../../common/pagequery.php');
	ini_set("display_errors",0);
	$sqlfetch = "select * from admin_register ORDER BY id desc";
	$querydb = mysql_query($sqlfetch);
?>
<div class='dashboard-container'>
	<!-- Members Details Start -->
	<h4 class="header-title">Users Details <a href="index.php?page=memberregister.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add New Member</a></h4>
	<div class='row'>
		<div class='col-sm-12'>
			<div class='panel-type-bg'>
				<h4 class="inner-title">Latest added members <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
				<table class='table table-bordered admin-table cus-table'>
					<tr>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Blood Group</th>
						<th class='hidden-xs'>Joining Date</th>
						<th class='hidden-xs'>Active Place</th>
						<th class='hidden-xs'>Status</th>
						<th class="<?php if($getuserrow['usertype'] == 'normal') { echo 'hide'; } ?> hidden-xs"></th>
					</tr>
					<tbody class="myTable">
					<?php 
						while($rowsdb = mysql_fetch_array($querydb))
						{
					?>
					<tr>
						<td class='tamil-let'><?php echo $rowsdb['fname'] ?> <?php echo $rowsdb['lname'] ?></td>
						<td><?php echo $rowsdb['phoneno'] ?></td>
						<td><?php echo $rowsdb['bg'] ?> <span class="hidden-sm hidden-md hidden-lg"><a href="index.php?page=memberupdate.php&id=<?php echo $rowsdb['id'] ?>" class='icons'><i class='fa fa-pencil'></a></span></td>
						<td class='hidden-xs'><?php echo $rowsdb['doj'] ?></td>
						<td class='hidden-xs'><?php echo $rowsdb['actplace'] ?></td>
						<td class='hidden-xs'><?php echo $rowsdb['status'] ?></td>
						<td class="hidden-xs <?php if($getuserrow['usertype'] == 'normal') { echo 'hide'; } ?>"><a href="index.php?page=memberupdate.php&id=<?php echo $rowsdb['id'] ?>" class='icons'><i class='fa fa-pencil'></a></td>
					</tr>
					<?php
						}
					?>
					<tr class="no-data">
						<td colspan="7" class="text-center">
							No record found.
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div><br /><br />
	<!-- Members Details End -->
</div>