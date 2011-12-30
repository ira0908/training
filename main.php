

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ArtiVisi Training</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="logo">
		<br><br><font face=arial size=6 color=#09cdf0>PT. ArtiVisi Intermedia</font>
		<p><em>Deviler Value With Open Platform<a href="http://www.freecsstemplates.org/"></a></em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="?menu=listJadwalTraining">Jadwal Training</a></li>
				<li><a href="?menu=entryPendaftaranTraining">Pendaftaran Training</a></li>
				<li><a href="?menu=entryKonfirmasiPembayaran">Konfirmasi Pembayaran</a></li>
				<li><a href="?menu=faq">FAQ</a></li>
				<li><a href="?menu=contact">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="GO" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
	<div id="page-bgtop">

    
		<div id="content">
		<table width=100%>
			<tr>
				<td width=100%>
					<?
					$menu=$_GET['menu'];
					switch($menu){
						case 'listJadwalTraining':
							include 'listJadwalTraining.php';
							break;
						case 'entryPendaftaranTraining':
							include 'entryPendaftaranTraining.php';
							break;
						case 'entryKonfirmasiPembayaran':
							include 'entryKonfirmasiPembayaran.php';
							break;
						case 'detailJadwalTraining':
							include 'detailJadwalTraining.php';
							break;
						case 'contact':
							include 'contact.php';
							break;
						case 'faq':
							include 'faq.php';
							break;
					}
					?>
				</td>
			</tr>
		</table>
		
		</div>
		<!-- end #content -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer-bgcontent">
	<div id="footer">
		<p>Copyright  2011 artivisi.com. All rights reserved. Design by <a href="http://www.rickyswebtemplates.com/">Ricky's Free web templates</a>.</p>
	</div>
	</div>
	<!-- end #footer -->
</div>
</html>
