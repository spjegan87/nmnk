<?php
	include('../../config/config.php');
	include('../../common/pagequery.php');
	
	$sqlfetch = "select * from admin_register ORDER BY id desc limit 5";
	$querydb = mysql_query($sqlfetch);

?>
<div class='dashboard-container'>
	<!-- Admin Dashboard Top -->
	<h4 class="header-title">Admin Dashboard</h4>
	<div class='row'>
		<div class='col-sm-3'>
			<div class='dashboard-tpg'>
				<p class='logo-clr-1'>
					<i class="fa fa-inr"></i><br />
					Amount Collection
				</p>
				1,500
				<span class='month-dis'>Dec,2017</span>
			</div>
		</div>
		<div class='col-sm-3'>
			<div class='dashboard-tpg'>
				<p class='logo-clr-2'>
					<i class="fa fa-users"></i><br />
					Active Members
				</p>
				<?php echo $memcount ?>
			</div>
		</div>
		<div class='col-sm-3'>
			<div class='dashboard-tpg'>
				<p class='logo-clr-3'>
					<i class="fa fa-medkit"></i><br />
					Active Blood Donors
				</p>
				<?php echo $doncount; ?>
			</div>
		</div>
		<div class='col-sm-3'>
			<div class='dashboard-tpg'>
				<p class='logo-clr-4'>
					<i class="fa fa-wpexplorer"></i><br />
					Overall <br />Projects
				</p>
				<?php echo $servicecount ?>
			</div>
		</div>
		<div class='clearfix'></div>
	</div><br /><br class='hidden-xs' />
	<!-- Admin Dashboard Top -->
	<!-- Last added new members -->
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
					</tr>
					<tbody class="myTable">
					<?php 
						while($rowsdb = mysql_fetch_array($querydb))
						{
					?>
					<tr>
						<td><?php echo $rowsdb['fname'] ?> <?php echo $rowsdb['lname'] ?></td>
						<td><?php echo $rowsdb['phoneno'] ?></td>
						<td><?php echo $rowsdb['bg'] ?></td>
						<td class='hidden-xs'><?php echo $rowsdb['doj'] ?></td>
						<td class='hidden-xs'><?php echo $rowsdb['actplace'] ?></td>
						<td class='hidden-xs'><?php echo $rowsdb['status'] ?></td>
					</tr>
					<?php
						}
					?>
					<tr class="no-data">
						<td colspan="6" class="text-center">
							No record found.
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div><br /><br />
	<!-- Last added new members -->
	<!-- Social links -->
	<div class='row'>
		<div class='col-sm-12'>
			<div class='panel-type-bg'>
				<h4 class="inner-title">Our Social links</h4>
				<div class='row'>
					<div class='col-sm-4 col-xs-3 social-links'>
						<a href="https://www.facebook.com/Wecandoitsspuram" target="_blank" class='fb'>
							<i class='fa fa-facebook'></i>
						</a><br /><span>Facebook</span>
					</div>
					<div class='col-sm-4 col-xs-3 social-links'>
						<a href="javascript:;" class='gp'>
							<i class='fa fa-google-plus'></i>
						</a><br /><span>Google Plus</span>
					</div>
					<div class='col-sm-4 col-xs-3 social-links'>
						<a href="javascript:;" class='yt'>
							<i class='fa fa-youtube'></i>
						</a><br /><span>Youtube</span>
					</div>
				</div>
			</div>
		</div>
	</div><br /><br />
	<!-- Social links -->
</div>