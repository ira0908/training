<html>
	<head>
		<title>
			Tambah Buku
		</title>
		<link rel="stylesheet" type="text/css" href="css/design3.css" />
	</head>
	<body>
		<form action="system/entryBuku.php" method="post">
			<table border="0" cellspacing="0" cellpadding="3" align="center">
				<tr class="top">
					<td colspan="2" class="title">
						Tambah Buku
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Judul Buku
					</td>
					<td class="right">
						<input type="text" name="judul_buku" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Jumlah Buku
					</td>
					<td class="right">
						<input type="text" name="jumlah_buku" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Pengarang
					</td>
					<td class="right">
						<input type="text" name="pengarang" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Penerbit
					</td>
					<td class="right">
						<input type="text" name="penerbit" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Kota Terbit
					</td>
					<td class="right">
						<input type="text" name="kota_terbit" class="text" />
					</td>
				</tr>
				<tr class="bottom">
					<td colspan="2" class="submit">
						<input type="submit" name="submit" class="button" value="Submit" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
