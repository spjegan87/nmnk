<?php 
	ini_set('display_errors', '0');
	include('../../config/config.php');
	$sql = "select * from footerpage_updates ORDER BY id DESC";
	$dataShow = mysql_query("select * from footerpage_updates ORDER BY id DESC");
	$query = mysql_query($sql);
	$rows = mysql_fetch_array($query);
	$count = mysql_num_rows($query);
?>
<form action='../sql_query/footer_publish.php?id=<?php echo $rows['id'] ?>' method='post' class="form" role="form">
	<h4 class="header-title">Website Footer Page Demo <a href="index.php?page=footer-page-updates.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>Click To Add New Footer Content</a></h4>
	<div class="footer-bg mar-top-10">
		<div class="col-sm-4 address">
			<img src="<?php echo $localpath ?>/images/temple.png" alt="" />
			<p><?php echo $rows['address'] ?></p>
		</div>
		<div class="col-sm-4 ft-latest-news">
			<h3>சமீபத்திய நிகழ்வுகள் </h3>
			<a href="javascript:;"><?php echo $rows['latestproj_1'] ?></a>
			<a href="javascript:;"><?php echo $rows['latestproj_2'] ?></a>
		</div>
		<div class="col-sm-4 ft-latest-news">
			<h3>வர இருக்கும் நிகழ்வுகள் </h3>
			<a href="javascript:;"><?php echo $rows['upcomingproj_1'] ?></a>
			<a href="javascript:;"><?php echo $rows['upcomingproj_2'] ?></a>
		</div>
		<div class="col-sm-4" style="display:none;">
			<input type='hidden' name='status' value="Y">
		</div>
		<div class="clearfix"></div>
	</div>
	<div class='col-sm-12'>
		<div class='text-center'><br />
			<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Publish</button>
			<a href="javascript:;" class="btn link shadow-4 slide-click">Show Footer Content</a>
		</div><br /><br />
	</div>
</form>
<form class='slide-open' style='display:none' action='../sql_query/footerpage_updates_delete.php' method='post'>
	<!-- Footer Details Show -->
	<div class="row">
		<div class="col-sm-12">
			<table class='table table-bordered admin-table'>
				<tr>
					<th class="hidden-xs">Address</th>
					<th>Latest Projects</th>
					<th>Upcoming Projects</th>
					<th width='150'>Action</th>
				</tr>
				<?php 
					while($rowsdb = mysql_fetch_array($dataShow))
					{
				?>
				<tr>
					<td class="hidden-xs"><?php echo $rowsdb['address'] ?></td>
					<td><?php echo $rowsdb['latestproj_1'] ?><br /><br /><?php echo $rowsdb['latestproj_2'] ?></td>
					<td><?php echo $rowsdb['upcomingproj_1'] ?><br /><br /><?php echo $rowsdb['upcomingproj_2'] ?></td>
					<td><a href="index.php?page=footer-page-updates-edit.php&id=<?php echo $rowsdb['id'] ?>" class='icons' title='Edit Footer Details'><i class='fa fa-pencil'></i></a>
					<button type="submit" title="<?php echo $rowsdb['id'] ?>" name="delete" value="<?php echo $rowsdb['id'] ?>" class='icons mar-rgtlft-20 brdr-none no-shadow <?php if($count == 1) echo "hide"; ?>' title='Delete Footer Details'onclick="return confirm('Are you sure want to delete this record?')"><i class='fa fa-trash'></i></button></td>
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

			</table>
		</div>
	</div>
</form>