<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from poster_register where status='Y'";
	$dataShow = mysql_query("select * from poster_register where status='Y'");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/poster_updates_delete.php' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Social Media Poster Details <a href="index.php?page=social-media-updates.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add New Poster</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added posters <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<p class="error-txt"><?php if(isset($_GET['msg']) and $_GET['msg'] == 'posterdelete') echo "1 Record deleted successfully."; ?></p>
					<table class='table table-bordered admin-table'>
						<tr>
							<th>Poster Name</th>
							<th>Poster Comment</th>
							<th>Poster Image</th>
							<th>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td><?php echo $rowsdb['postername'] ?> <br /><span class='small'><?php echo $rowsdb['posterdate'] ?></span></td>
							<td><?php echo $rowsdb['postercomments'] ?></td>
							<td><img src="<?php echo $localpath ?>/admin/posterphotos/<?php echo $rowsdb['photo'] ?>" width='80' height='60' /></td>
							<td><a href="index.php?page=social-media-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Poster Details'><i class='fa fa-pencil'></i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' title='Delete Poster Details' name='delete' value='<?php echo $rows['id'] ?>' onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'></i></button></td>
						</tr>
						<?php
							}
							if($count == 0)
							{
						?>
								<tr><td class='text-center text-danger' colspan='4'>No record found</td></tr>
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