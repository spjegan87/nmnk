<?php
	include('../../config/config.php');
	ini_set("display_errors",0);

	$sql = "select * from webcarousel_register where status='Active'";
	$dataShow = mysql_query("select * from webcarousel_register where status='Active'");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>

<form action='../sql_query/webcarousel_updates_delete.php?id=<?php echo $rows['id'] ?>' method='post'>
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Website Carousel Content Lists <a href="index.php?page=web-carousel.php" class='pull-right icons'><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add New Carousel Content</a></h4>
		<div class='row'>
			<div class='col-sm-12'>
				<div class='panel-type-bg'>
					<h4 class="inner-title">Latest added members <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
					<p class="error-txt"><?php if(isset($_GET['msg']) and $_GET['msg'] == 'carouseldelete') echo "1 Record deleted successfully."; ?></p>
					<table class='table table-bordered admin-table'>
						<tr>
							<th width='15%' class='hidden-xs'>Carousel Title</th>
							<th width='60%'>Carousel Content</th>
							<th width='10%'>Status</th>
							<th width='10%'>Action</th>
						</tr>
						<tbody class="myTable">
						<?php 
							while($rowsdb = mysql_fetch_array($dataShow))
							{
						?>
						<tr>
							<td class='hidden-xs'><?php echo $rowsdb['carouseltitle'] ?> </td>
							<td><?php echo $rowsdb['carouselcomment'] ?></td>
							<td><?php echo $rowsdb['status'] ?></td>
							<td><a href="index.php?page=web-carousel-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons'><i class='fa fa-pencil'></i></a><button type='submit' class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 0) echo "hide"; ?>' title='Delete Poster Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'></i></button></td>
						</tr>
						<?php
							}
						?>
						<tr class="no-data">
							<td colspan="4" class="text-center">
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