<?php
	include("../configuration/configuration.php");
	$NamaLengkap		=	$_POST["nama_lengkap"];
	$AlamatPengiriman	=	$_POST["alamat_pengiriman"];
	$Kota				=	$_POST["kota"];
	$KodePos			=	$_POST["kode_pos"];
	$NoTelephone		=	$_POST["no_telephone"];
	$Pekerjaan			=	$_POST["pekerjaan"];
	$Jumlah				=	$_POST["jumlah"];
	$JudulBuku			=	$_POST["judul_buku"];
	$Submit				=	$_POST["submit"];
	//----------------------------------------------------
	if($Submit){
	mysql_query("INSERT INTO Pemesanan_Buku (nama_lengkap, alamat_pengiriman, kota, kode_pos, no_telepon, pekerjaan, jumlah, id_buku)VALUES('$NamaLengkap','$AlamatPengiriman','$Kota','$KodePos','$NoTelephone','$Pekerjaan','$Jumlah','$JudulBuku')")Or Die(mysql_error());	
	?>
		<script>
				alert("Succes");
				location="../entryPemesananBuku.php";
		</script>
	<?php	
	}
?>
