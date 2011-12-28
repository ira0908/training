<?php
include("configuration/configuration.php");
$id		=$_GET['id'];
$query	= mysql_query("SELECT a.*, b.nama_paket_training, b.kode_paket_training FROM Jadwal_Training as a, Paket_Training as b WHERE a.id='$id' and a.id_paket_training=b.id");
$array	= mysql_fetch_array($query);

?>
<html>
	<head>
	<title>Jadwal Training</title>
	</head>
	<body>
		<h2>Detail Jadwal Training</h2>
		<table>
			<tr>
				<td><b>Kode Paket Training</b></td>
				<td>:</td>
				<td><?php echo $array['nama_paket_training'];?>(<?php echo $array['kode_paket_training'];?>)</td>
			</tr>
			<tr>
				<td><b>Tanggal Training</b></td>
				<td>:</td>
				<td><?php echo $array['tanggal_mulai']?> s/d <?php echo $array['tanggal_selesai']?></td>
			</tr>
			<tr>
				<td><b>Durasi</b></td>
				<td>:</td>
				<td><?php echo $array['durasi_jam']?> Jam</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><?php echo $array['durasi_hari']?>Hari</td> 
			</tr>
			<tr>
				<td><b>Waktu Training</b></td>
				<td>:</td>
				<td><?php echo $array['waktu_training']?></td>
			</tr>
			<tr>
				<td><b>Maksimal Peserta</b></td>
				<td>:</td>
				<td><?php echo $array['maksimal_peserta']?></td>
			</tr>
			<tr>
				<td><b>Harga Training</b></td>
				<td>:</td>
				<td><?php echo $array['harga_umum']?></td>
			</tr>
			<tr>
				<td><b>Harga Training</b></td>
				<td>:</td>
				<td><?php echo $array['harga_mahasiswa']?></td>
			</tr>
			<tr>
				<td><b>Lokasi Training</b></td>
				<td>:</td>
				<td><?php echo $array['lokasi_training']?></td>
			</tr>
			<tr>
				<td><b>Silabus Training</b></td>
				<td>:</td>
				<td>
					<table>
						<tr>
							<td><?php echo $array['silabus']?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><b>Fasilitas</b></td>
				<td>:</td>
				<td>
					<table>
						<tr>
								<td>
									<?php echo $array['fasilitas']?>
								</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
