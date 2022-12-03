<form action="../sql_query/webcarousel_register.php" method="post" enctype="multipart/form-data" class="form" role="form">
	<div class='dashboard-container'>
		<!-- Members Details Start -->
		<h4 class="header-title">Website Carousel Content <a href="index.php?page=web-allcarousel.php" class='pull-right icons'><i class="fa fa-angle-double-left" aria-hidden="true"></i>View All Carousel Cotent</a></h4>
		<div class='panel-type-bg'>
			<!-- Address Info -->
			<div class='row'>
				<div class='col-sm-10'>
					<div class="form-group">
						<label for="carouseltitle" class='mandatory'>Carousel Title</label>
						<input type="text" class="form-control" id="carouseltitle" name='carouseltitle' placeholder='Enter carousel title' required>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class="form-group">
						<label for="carouselcomment" class='mandatory'>Carousel Content</label>
						<textarea id="carouselcomment" name="carouselcomment" rows="4" cols="" class="form-control"placeholder="Enter carousel content" required></textarea>
					</div>
				</div>
				<div class='col-sm-12'style='display:none;'>
					<div class="form-group">
						<input type="text" value="Active" name='status'>
					</div>
				</div>
				<div class='clearfix'></div>
			</div><br />
			<!-- Recent Activities Info -->
			<div class='text-center'>
				<button class="btn custom-btn admin-btn hvr-float-shadow shadow-2">Submit</button>
			</div><br />
		</div>
		<!-- Members Details End -->
	</div>
</form>