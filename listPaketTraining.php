<html>
<head>
<title>List Paket Training</title>
<link rel="stylesheet" type="text/css" href="css/design2.css" />
</head>

<body>
<h1>List Paket Training</h1>

<a href="entryPaketTraining.php">Entry Paket Training</a>
<table border='1'>
<tr> 
<th>Kode Kode Training</th>
<th>Nama Paket Training</th>
<th>Action</th>

</tr>
<?php

include ('configuration/configuration.php');

$q=mysql_query("select * from Paket_Training");
while($a=mysql_fetch_array($q))
{
?>
<tr class="isi"> 
<td><?=$a['kode_paket_training']?></td>
<td><?=$a['nama_paket_training']?></td>
<td>
  <a href=entryPaketTraining.php?id=<? echo $a['id'];?>>Edit</a> | <a href='system/hapusPaketTraining.php?id=<? echo $a['id'];?>'>Hapus</a>
</td>

</tr>
<?php } ?>
</table>
</body>
</html>
