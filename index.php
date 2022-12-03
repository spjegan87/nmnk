<!-- Include header part -->
<?php
	include('config/config.php');
	include('common/header.php');
	include('common/pagequery.php');
	if(isset($_SESSION['username']))
	{
		header('location:'.$localpath.'/admin/templates/index.php');
	}
?>
<!-- Include header part end -->
<body class="home">
<div id="seeMore">
	<div class="wecan-anim-page">
		<canvas id="world"></canvas>
		<a href="home.php"><img src="images/logo.png" alt="" /></a>
		<p><?php echo $indexrows['indexcontent'] ?><br /> <span class="wecanname">இவண் நம்மால் முடியும் நண்பர்கள் குழு.</span></p>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/magnetic.min.js"></script>
<script type="text/javascript">
window.setTimeout(function()
{
	window.location.href = 'home.php';
}, 6000);
</script>
</body>
</html>