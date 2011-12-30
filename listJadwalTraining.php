<?php
	include ("configuration/configuration.php");
	$query=mysql_query("select a.*, b.nama_paket_training, b.kode_paket_training from Jadwal_Training as a, Paket_Training as b WHERE a.id_paket_training=b.id and aktif=1");

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/design2.css" />
		<title>
			List Jadwal Training
		</title>
	</head>
	<body>
		<h2>Jadwal Training</h2>
		<table border="2" align="center" cellpadding='4' cellspacing="0" width=100%>
			<tr>
				<th rowspan='2' align='center'>Nama Paket<br>Training</th>
				<th colspan='2' align='center'>Tanggal</th>
				<th colspan='2' align='center'>Durasi</th>
				<th rowspan='2' align='center'>Waktu<br />Training</th>
				<th rowspan='2' align='center'>Maksimal<br />Peserta</th>
				<th colspan='2' align='center'>Harga Training</th>
				<th rowspan='2' align='center'>Lokasi<br />Training</th>
			</tr>
			<tr align='center'>
				<th>Mulai</th>
				<th>Selesai</th>
				<th>Jam</th>
				<th>Hari</th>
				<th>Umum</th>
				<th>Mahasiswa</th>
			</tr>
				<?php
					while($array=mysql_fetch_array($query))
					{
				?>
					<tr class="isi">
						<td width=17%>
							<a href=?menu=detailJadwalTraining&id=<?php echo $array['id'];?>>
							<?php echo $array['nama_paket_training'];?>
							(
							<?php echo $array['kode_paket_training'];?>
							)</a>
						</td>
						<td align=center>
							<?php echo $array['tanggal_mulai'];?>
						</td>
						<td align=center>
							<?php echo $array['tanggal_selesai'];?>
						</td>
						<td align=center>
							<?php echo $array['durasi_jam'];?>
						</td>
						<td align=center>
							<?php echo $array['durasi_hari'];?>
						</td>
						<td align=center>
							<?php echo $array['waktu_training'];?>
						</td>
						<td align=center>
							<?php echo $array['maksimal_peserta'];?> orang
						</td>
						<td align=right>
							Rp <?php echo $array['harga_umum'];?>
						</td>
						<td align=right>
							Rp <?php echo $array['harga_mahasiswa'];?>
						</td>
						<td align=center>
							<?php echo $array['lokasi_training'];?>
						</td>
					</tr>
				<?php	
					}
				?>	
		</table>
	</body>
</html>
