<?php
	include("configuration/configuration.php");
?>
<html>
 <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/design2.css" />
 </head>
<body>
  	 Search by paket training 
		<select>
			<?php
				$que=	mysql_query("SELECT * FROM Paket_Training");
					
				while($a	=	mysql_fetch_array($que))
				{
			?>
				<option>
					<?php
						$b=$a['nama_paket_training'];
						$c=$a['id'];
						echo $b;
					?>
				</option>
			<?php
				}
			?>
		</select>
<table border='1'>
    <tr>
	     <th>No Pendaftaran</th>
		<th>Tanggal Pendaftaran</th>
		<th>Nama</th>
		<th>Alamat</th>	
		<th>Tanggal Lahir</th>
		<th>Pekerjaan</th>
		<th>Email</th>
		<th>No Telephone</th>
		<th>Paket Training</th>
		<th>Tanggal Training</th>
		<th>Pembayaran OP</th>
		<th>Keterangan</th>
	</tr>
	<?php
		$que2	=	mysql_query("SELECT a.*, b.nama_paket_training, c.tanggal_mulai FROM Pendaftaran_Training as a, Paket_Training as b, Jadwal_Training as c WHERE a.paket_training=b.id and a.id_jadwal=c.id");
		while($arr2	=	mysql_fetch_array($que2))
		{
	?>
		<tr  class="isi">
			<td>
				<?=$arr2['id']?>
			</td>
			<td>
				<?=$arr2['tanggal']?>
			</td>
			<td>
				<?=$arr2['nama']?>
			</td>
			<td>
				<?=$arr2['alamat']?>
			</td>
			<td>
				<?=$arr2['tanggal_lahir']?>
			</td>
			<td>
				<?=$arr2['pekerjaan']?>
			</td>
			<td>
				<?=$arr2['email']?>
			</td>
			<td>
				<?=$arr2['no_telpon']?>
			</td>
			<td>
				<?=$arr2['nama_paket_training']?>
			</td>
			<td>
				<?=$arr2['tanggal_mulai']?>
			</td>
			<td>
				<?=$arr2['pembayaran_dp']?>
			</td>
			<td>
				<?=$arr2['keterangan']?>
			</td>	
		</tr>
	<?php
		}
	?>
</table>
</body>
</html>
