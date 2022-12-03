<?php
	include('../../config/config.php');
	include('../../common/pagequery.php');
	ini_set("display_errors",0);
	$sqlfetch = "select * from donor_register ORDER BY id asc";
	$querydb = mysql_query($sqlfetch);
?>
<form action='../sql_query/donor_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Donor Details <a href="index.php?page=blooddonors.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add New Donor</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added donors <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<table class='table table-bordered admin-table'>
						<tr>
							<th>Name</th>
							<th>Blood Group</th>
							<th class="hidden-xs">Phone Number</th>
							<th class="hidden-xs">Active Place</th>
							<th class="hidden-xs">Status</th>
							<th class="hidden xs <?php if($getuserrow['usertype'] == 'normal') { echo 'hide'; } ?>"></th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($querydb))
							{
						?>
						<tr>
							<td><?php echo $rowsdb['dname'] ?></td>
							<td><?php echo $rowsdb['dbg'] ?> <br /><span class="hidden-sm hidden-md hidden-lg"><?php echo $rowsdb['phoneno'] ?><br /> <?php echo $rowsdb['natplace'] ?> <a href="index.php?page=donorupdate.php&id=<?php echo $rowsdb['id'] ?>" class='icons mar-none'><i class='fa fa-pencil'></i></a>&nbsp;&nbsp;<button type='submit' class='icons  mar-none brdr-none no-shadow bg-none' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'></i></button></span></td>
							<td class="hidden-xs"><?php echo $rowsdb['phoneno'] ?></td>
							<td class="hidden-xs"><?php echo $rowsdb['natplace'] ?></td>
							<td class="hidden-xs"><?php echo $rowsdb['status'] ?></td>
							<td class="hidden-xs <?php if($getuserrow['usertype'] == 'normal') { echo 'hide'; } ?>"><a href="index.php?page=donorupdate.php&id=<?php echo $rowsdb['id'] ?>" class='icons'><i class='fa fa-pencil'></i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow bg-none' name='delete'value='<?php echo $rowsdb['id'] ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'></i></button></td>
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
</form>