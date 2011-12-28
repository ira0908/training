<?php
	include("configuration/configuration.php");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/design3.css">
		<title>
			Pemesanan Buku
		</title>
	</head>
	<body>
		<form method="post" action="system/entryPemesananBuku.php">
			<table border="0" cellpadding="3" cellspacing="0" class="2">
				<tr class="top">
					<td class="title" colspan="2">
						Pemesanan Buku
					</td>
				</tr>
				<tr class="top2">
					<td class="title2" colspan="2">
						PT. ArtiVisi Intermedia
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Nama Lengkap
					</td>
					<td class="right">
						<input type="text" name="nama_lengkap" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Alamat Pengiriman
					</td>
					<td class="right">
						<textarea name="alamat_pengiriman" class="text">
							&nbsp;
						</textarea>
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Kota
					</td>
					<td class="right">
						<input type="text" name="kota" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Kode Pos
					</td>
					<td class="right">
						<input type="text" name="kode_pos" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						No. Telephone
					</td>
					<td class="right">
						<input type="text" name="no_telephone" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Pekerjaan
					</td>
					<td class="right">
						<input type="text" name="pekerjaan" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Jumlah
					</td>
					<td class="right">
						<input type="text" name="jumlah" class="text" />
					</td>
				</tr>
				<tr class="mid">
					<td class="left">
						Judul Buku
					</td>
					<td class="right">
						<?php
							$que	=	mysql_query("SELECT * FROM Buku");
						?>
						<select name="judul_buku">
							<?php
								while($arr	=	mysql_fetch_array($que))
							{ ?>
								<option value="<?=$arr["id"]?>"><?=$arr["judul_buku"]?></option>	
							<?php }
							?>
						</select>
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
