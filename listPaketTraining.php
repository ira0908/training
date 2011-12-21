<html>
<head>
<title>List Paket Training</title>
</head>

<body>
<center><h1>List Paket Training</h1>
<table border='1'>
<tr> 
<td>Kode Kode Training</td>
<td>Nama Paket Training</td>

</tr>
<?php

include ('configuration/configuration.php');

$q=mysql_query("select * from Paket_Training");
while($a=mysql_fetch_array($q))
{
?>
<tr> 
<td><?=$a['kode_paket_training']?></td>
<td><?=$a['nama_paket_training']?></td>
<td>
  <a href=entryPaketTraining.php?id=<? echo $a['id'];?>>Edit</a> | <a href='system/hapusPaketTraining.php?id=<? echo $a['id'];?>'>Hapus</a>
</td>

</tr>
<?php } ?>
</center>
</table>
</body>
</html>
