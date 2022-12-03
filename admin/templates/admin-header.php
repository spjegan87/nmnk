<?php
	include('../../common/pagequery.php');
	$userphoto = $_SESSION['username'];
	$sqlfetch = "select * from admin_register where username='".$userphoto."'";
	$querydb = mysql_query($sqlfetch);
	$rowsdb = mysql_fetch_array($querydb)
?>
<div class="panel-hdr navbar-fixed-top">
	<div class="col-sm-2 col-xs-3 panel-hdr-lft">
		<p class='hidden-xs'>
			<i class="fa fa-database"></i>
			Admin Panel
			<a href="javascript:;" class="anim-in"><i class="fa fa-hand-o-right"></i><i class="fa fa-hand-o-left" style="display:none"></i></a>
		</p>
		<p class='mobile-logo hidden-sm hidden-md hidden-lg'><img src="<?php echo $localpath ?>/images/logo.png" alt="" /></p>
	</div>
	<div class="col-sm-10 col-xs-9 panel-hdr-rgt">
		<div class="theme-setting">
			<h4>Select your own theme color</h4>
			<a href="javascript:;" class="theme-1 active"></a>
			<a href="javascript:;" class="theme-2"></a>
			<a href="javascript:;" class="theme-3"></a>
			<a href="javascript:;" class="theme-4"></a>
			<a href="javascript:;" class="theme-5"></a>
			<a href="javascript:;" class="theme-6"></a>
			<a href="javascript:;" class="theme-7"></a>
			<a href="javascript:;" class="theme-8"></a>
		</div>
		<div class="search-panel">
			<span>
			<i class="fa fa-search"></i><input type="text" name="" value="" placeholder="Enter user name and search" autocomplete="off" class="anim-search" /></span>
		</div>
		<div class="login-panel">
			<a href="javascript:;" class='user-name'><span><img src="<?php echo $localpath ?>/admin/userphotos/<?php echo $rowsdb['photos'] ?>" alt="" class='img-responsive' /></span>Mr. <?php echo $rowsdb['fname'] ?></a>
			<a href="javascript:;" class="user-menu"><i class="fa fa-bars"></i><i class="fa fa-times" style="display:none"></i></a>
			<span class="hidden-sm hidden-md hidden-lg time" id="time"></span>
			<div class="login-panel-show disp-none hidden-xs">
				<a href="index.php?page=memberupdate.php&id=<?php echo $getuserrow['id'] ?>"><i class="fa fa-suitcase"></i> Profile</a>
				<!-- <a href="javascript:;"><i class="fa fa-cog"></i> Setting</a> -->
				<a href="<?php echo $localpath ?>/config/logout.php"><i class="fa fa-key"></i> Logout</a>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>