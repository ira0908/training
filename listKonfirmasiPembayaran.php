<html>
<head>
<link rel="stylesheet" type="text/css" href="css/design2.css" />
<title>Konfirmasi Pembayaran</title>
</head>

<body>
<h1>Konfirmasi Pembayaran</h1>
<table border='1' cellspacing="0" cellpadding="3">
<tr> 
<th>No Pendaftaran</th>
<th>Nama Peserta</th>
<th>Paket Training</th>
<th>Tgl Pembayaran</th>
<th>Nominal</th>
<th>Pembayaran</th>
<th>Dari Rekening</th>
<th>Keterangan</th>
</tr>
<?php

include ('configuration/configuration.php');
$q=mysql_query("select a.*, b.nama, c.nama_paket_training from Konfirmasi_Pembayaran as a, Pendaftaran_Training as b, Paket_Training as c WHERE a.id_pendaftaran=b.id and b.id_paket_training=c.id");
while($a=mysql_fetch_array($q))
{
?>
<tr class="isi"> 
<td><?=$a['id_pendaftaran']?></td>
<td><?=$a['nama']?></td>
<td><?=$a['nama_paket_training']?></td>
<td><?=$a['tanggal_pembayaran']?></td></td>
<td><?=$a['nominal']?></td>
<td><?=$a['pembayaran']?></td>
<td><?=$a['dari_rekening']?></td>
<td><?=$a['keterangan']?></td>

</tr>
<?php } ?>
</table>
</body>
</html>
