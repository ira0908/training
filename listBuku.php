<?php
	include("configuration/configuration.php");
	$que	=	mysql_query("SELECT * FROM Buku");
	$rec	=	mysql_fetch_array($que);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="#" />
		<title>
			List Buku
		</title>
	</head>
	<body>
		<table>
			<tr>
				<th>
					Judul Buku
				</th>
				<th>
					Jumlah Buku
				</th>
				<th>
					Pengarang
				</th>
				<th>
					Penerbit
				</th>
				<th>
					Kota Terbit
				</th>
				<th>
					Harga
				</th>
			</tr>
			<tr>
				<td>
					<?=$rec["judul_buku"]?>
				</td>
				<td>
					<?=$rec["jumlah_buku"]?>
				</td>
				<td>
					<?=$rec["pengarang"]?>
				</td>
				<td>
					<?=$rec["penerbit"]?>
				</td>
				<td>
					<?=$rec["kota_terbit"]?>
				</td>
				<td>
					<?=$rec["harga"]?>
				</td>
			</tr>
		</table>
	</body>
</html>
