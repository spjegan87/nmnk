<?php
	$username = $_SESSION['username'];
	$sqlfetch = "select * from admin_register where username='".$username."'";
	$querydb = mysql_query($sqlfetch);
	while($row = mysql_fetch_assoc($querydb))
	{
		if($row['usertype'] == "normal")
		{
			echo "<form method='post' action=''><ul class='admin-menu'><li><a href='index.php?page=dashboard.php'><i class='fa fa-dashboard'></i> Dashboard</a></li><li><a href='index.php?page=userdetails.php'><i class='fa fa-user'></i> Users Details</a></li></ul></form>";
		}
		elseif($row['usertype'] == "admin")
		{
			echo "<form method='post' action=''><ul class='admin-menu'><li><a href='index.php?page=dashboard.php'><i class='fa fa-dashboard'></i> Dashboard</a></li><li><a href='index.php?page=userdetails.php'><i class='fa fa-user'></i> Users Details</a></li><li><a href='index.php?page=menu-controller.php'><i class='fa fa-bars'></i> Menu Controller</a></li><li><a href='javascript:;'><i class='fa fa-bars' aria-hidden='true'></i> Menu Pages <span class='arrow'></span></a><ul class='sub-menu'><li><a href='index.php?page=web-index-page.php'>Home Page<br /><span>நுழைவு பக்கம்</span></a></li><li><a href='index.php?page=web-carousel.php'>Index Page Carousel <br /><span>முகப்பு பக்கம்</span></a></li><li><a href='index.php?page=web-index-content.php'>Index Page Content <br /><span>முகப்பு பக்கம்</span></a></li><li><a href='index.php?page=web-about-page.php'>About Page <br /><span>எங்களை பற்றி</span></a></li><li><a href='index.php?page=gallery.php'>Gallery Page <br /><span>குழு புகைப்படங்கள்</span></a></li></ul></li><li><a href='index.php?page=allservices.php'><i class='fa fa-handshake-o'></i>Social Service Page</a></li><li><a href='index.php?page=demo-footer.php'><i class='fa fa-book'></i> Footer Page Updates</a></li><li><a href='index.php?page=social-media-updates.php'><i class='fa fa-globe'></i> Social Media Updates</a></li><li><li><a href='index.php?page=blooddonors.php'><i class='fa fa-tint'></i>Blood Donors</a></li><li><a href='index.php?page=demo-contact.php'><i class='fa fa-phone'></i> Contact Information</a></li><li><a href='index.php?page=web-rules.php'><i class='fa fa-book'></i>Team Rules & Conditions</a></li></ul></form>";
		}
	}
?>