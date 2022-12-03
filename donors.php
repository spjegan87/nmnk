<!-- Header included -->
<?php 
	include('common/header.php');
	include('config/config.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Header included -->
<body class="inner-pages">
<div class="container-fluid">
	<div class="row inner-hd-bg">
		<div class="col-sm-12">
			<!-- Header -->
				<?php include("common/menu.php") ?>
			<!-- Header -->
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="inner-cont serivce-page">
			<h2 class="title">நம்மால் முடியும் நண்பர்கள் குழு மூலம் இரத்ததானம் செய்தவர்கள் விபரம்</h2><br />
				<h4 class="inner-title donor-tite">இரத்த கொடையாளர்கள் எண்ணிக்கை : <?php echo $countrows ?> <p class='pull-right search-field'><input type='text' name='' placeholder='Search Members' class='form-control searchbox'></p></h4>
				<table class='table table-bordered admin-table donor-det'>
					<tr>
						<th>Name</th>
						<th>Blood Group</th>
						<th>Phone Number</th>
						<th class='hidden-xs'>Active Place</th>
					</tr>
					<tbody class="myTable">
					<?php
						while($rowsdb = mysql_fetch_array($donorquery))
						{
						//print_r($rowsdb);
					?>
					<tr>
						<td><?php echo $rowsdb['dname'] ?></td>
						<td><?php echo $rowsdb['dbg'] ?></td>
						<td><?php echo $rowsdb['phoneno'] ?></td>
						<td class='hidden-xs'><?php echo $rowsdb['natplace'] ?></td>
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
	</div>
<!-- Footer included -->
<?php 
	include('common/footer.php');
?>