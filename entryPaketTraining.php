<?php
	include("configuration/configuration.php");
	if($_GET['id']){
	$id	=	$_GET['id'];
	$que	=	mysql_query("SELECT * FROM Paket_Training WHERE id='$id'");
	$arr=	mysql_fetch_array($que);
	}

?>
<html>
	<head>
		<title>
			Paket Training
		</title>
	</head>
	<body>
		<form method="post" action="system/savePaketTraining.php">
					<h3>
						Paket Training
					</h3>
					<table>
						<tr>
							<td>Kode Paket Training</td>
							<td><input type="text" name="kode_paket_training" value="<?=$arr['kode_paket_training']?>" class="input" /></td>
						</tr>
						<tr>
							<td>Nama Paket Training</td>
							<td><input type="text" name="nama_paket_training" value="<?=$arr['nama_paket_training']?>" class="input" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Submit" class="button" /></td>
						</tr>
					</table>	
		</form>
	</body>
</html>
