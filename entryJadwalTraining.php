<?php
	include("configuration/configuration.php");
	$que = mysql_query("SELECT * FROM Paket_Training");
	
?>
<html>
	<head>
	<title>Jadwal Training</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/ng_all.css">
	</head>
	<body>
	<script type="text/javascript">
		var ng_config = {
			assests_dir: 'assets/'	// the path to the assets directory
		}
	</script>
	<script type="text/javascript" src="ng_all.js"></script>
	<script type="text/javascript" src="components/calendar.js"></script>
	<script type="text/javascript">
	var my_cal;
	var my_cal2;
	ng.ready(function(){
			my_cal = new ng.Calendar({
				input: 'date1',	
				start_date: 'year-50',	
				end_date: 'year+100',
				date_format:'Y-m-d',
				display_date: new Date()
				
			});
			my_cal2 = new ng.Calendar({
				input: 'date2',	
				start_date: 'year-50',	
				end_date: 'year+100',	
				date_format:'Y-m-d',
				display_date: new Date()
				
			});
			
		});
	</script>
		<form method="POST" action="system/saveJadwalTraining.php" >
		<center><h1>Jadwal Training</h1></title></center>
		<table>
			<tr>
				<td>Kode Paket Training</td>
				<td>:</td>
				<td><select name='kode_paket_training'>
					<?php
						while($arr = mysql_fetch_array($que))
						{
					?>
						<option value=<?=$arr['kode_paket_training']?>>
						<?=$arr['nama_paket_training']?>
						</option>
					<?php	
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Training</td>
				<td>:</td>
				<td><input type='text' name='tanggal_mulai' id='date1'>&nbsp;&nbsp;s/d&nbsp;&nbsp;
				<input type='text' name='tanggal_selesai' id='date2'></td>
			</tr>
			<tr>
				<td>Durasi</td>
				<td>:</td>
				<td><input type='text' name='jam' size=5>Jam</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type='text' name='hari' size=5>Hari</td> 
			</tr>
			<tr>
				<td>Waktu Training</td>
				<td>:</td>
				<td><input type='text' name="waktu"></td>
			</tr>
			<tr>
				<td>Maksimal Peserta</td>
				<td>:</td>
				<td><input type='text' name="maksimal" size=5></td>
			</tr>
			<tr>
				<td>Harga Umum</td>
				<td>:</td>
				<td><input type='text' name="harga_umum"></td>
			</tr>
			<tr>
				<td>Harga Mahasiswa</td>
				<td>:</td>
				<td><input type='text' name="harga_mahasiswa"></td>
			</tr>
			<tr>
				<td>Lokasi Training</td>
				<td>:</td>
				<td><input type='text' name="lokasi"></td>
			</tr>
			<tr>
				<td valign=top>Silabus Training</td>
				<td valign=top>:</td>
				<td><textarea name="silabus" rows=15 cols=70></textarea></td>
			</tr>
			<tr>
				<td valign=top>Fasilitas</td>
				<td valign=top>:</td>
				<td><textarea name="fasilitas" rows=15 cols=50></textarea></td>
			</tr>
			<tr>
			<td>Aktif</td>
			<td>:</td>
			<td><input type="radio" name="aktif" value=1>Ya
		  <input type="radio" name="aktif" value=0>Tidak</td>
			</tr>			
		</table>
		<input type='submit' name='save' value='save'>
		</center>
		</form>
	</body>
</html>
