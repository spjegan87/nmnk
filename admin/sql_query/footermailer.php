<?php
	ini_set('display_errors', '0');
	include('../../config/config.php');

	$mailerid = $_POST['footermail'];
	$comments = $_POST['footercontent'];
	
	$sql ="insert into feedback_mailer (mailerid, comments) values ('$mailerid','".mysql_real_escape_string($comments)."')";

	$query = mysql_query($sql);

	if($query == '1')
	{
		// To find the last inserting record
		$mailid = " select * from feedback_mailer order by id desc limit 1;";
		$mailQuery = mysql_query($mailid);
		$rows = mysql_fetch_array($mailQuery);

		$to= $rows['mailerid'];
		// Your subject
		$subject="நம்மால் முடியும் நண்பர்கள்குழு - சண்முகசுந்தரபுரம்";
		// From
		$headers ="From : wecadoitsspuram@gmail.com";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "CC: wecandoitsspuram@gmail.com";
		// Your message
		$message='<table cellspacing="0" cellpadding="0" border="0" width="630" align="center">
				<tr>
					<td height="60" bgcolor="#0BD697" align="center"><font style="font-size:14px; font-family:arial; color:#fff;"><strong>நம்மால் முடியும் நண்பர்கள்குழு - சண்முகசுந்தரபுரம் </strong></font></td>
				</tr>
				<tr>
					<td height="40"><img width="1" height="10" alt="" src="images/spacer.gif"></td>
				</tr>
				<tr>
					<td valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%">
					<tr>
						<td width="30"><img width="30" height="1" alt="" src="images/spacer.gif"></td>
						<td valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%">
						<tr>
							<td height="20"><img width="1" height="20" alt="" src="http://www.nammalmudiyumnanbargalkulu.com/images/spacer.gif"></td>
						</tr>
						<tr>
							<td style="font-size:14px; font-family:arial; color:#000;">
								<font style="font-size:14px; font-family:arial; color:#000;">உங்களின் மேலான கருத்தை பதிவு செய்தமைக்கு நன்றி. உங்களின் கருத்து மிக விரைவில் பரிசீலிக்கப்படும்.</font>
							</td>
						</tr>
						<tr>
							<td height="20"><img width="1" height="20" alt="" src="images/spacer.gif"></td>
						</tr>
						</table></td>
						<td width="30"><img width="30" height="1" alt="" src="images/spacer.gif"></td>
					</tr>
					</table></td>
				</tr>
				<tr>
					<td height="10"><img width="1" height="10" alt="" src="images/spacer.gif"></td>
				</tr>
				<tr>
					<td height="5" bgcolor="#0BD697"></td>
				</tr>
			</table>';
		// send email


		$sentmail = mail($to,$subject,$message,$headers);
		// if your email succesfully sent
		if($sentmail == '1')
		{
			header('location:'.$localpath.'/thanks.php');
		}
	}
?>