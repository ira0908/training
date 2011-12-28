<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Rickys web templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="logo">
		<h1>PT. Artivisi Intermedia</h1>
		<p><em>Deviler Value With Open Platform<a href="http://www.freecsstemplates.org/"></a></em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php?menu=home" class="first">Home</a></li>
				<li><a href="index.php?menu=listJadwalTraining">Jadwal Training</a></li>
				<li><a href="index.php?menu=entryPendaftaranTraining">Pendaftaran Training</a></li>
				<li><a href="index.php?menu=entryKonfirmasiPembayaran">Konfirmasi Pembayaran</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Contact</a></li>
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
    
    <div id="sidebar">
			<ul>
				<li>
					<h2>Latest news</h2>
					<p>Thank you for downloading this template. This or any other template  is  free for personal use, but you must leave our link on this page. </p>
				</li>
				<li>
					<h2>Partners</h2>
					<ul>
						<li><a href="#">Some link here</a></li>
						<li><a href="#">Some link here</a></li>
						<li><a href="#">Some link here</a></li>
						<li><a href="#">Some link here</a></li>
						<li><a href="#">Some link here</a></li>
					</ul>
				</li>
			</ul>
</div>
		<!-- end #sidebar -->
    
		<div id="content">
		<table>
			<tr>
				<td width=100%>
					<?
					$menu=$_GET['menu'];
					switch($menu){
						case 'home':
							include 'home.php';
							break;
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
		<p>Copyright  2011 YourSitename.com. All rights reserved. Design by <a href="http://www.rickyswebtemplates.com/">Ricky's Free web templates</a>.</p>
	</div>
	</div>
	<!-- end #footer -->
</div>
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
