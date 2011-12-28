<?php
	include ("../configuration/configuration.php");
	$JudulBuku	=	$_POST['judul_buku'];
	$JumlahBuku	=	$_POST['jumlah_buku'];
	$Pengarang	=	$_POST['pengarang'];
	$Penerbit	=	$_POST['penerbit'];
	$KotaTerbit	=	$_POST['kota_terbit'];
	$Submit		=	$_POST['submit'];
	//----------------------------------------------		
	if($Submit){
		mysql_query("INSERT INTO Buku (judul_buku, jumlah_buku, pengarang, penerbit, kota_terbit) VALUES ('$JudulBuku','$JumlahBuku','$Pengarang','$Penerbit','$KotaTerbit')")Or Die(mysql_error());
	?>
		<script>
			alert("Success");
			location="../entryBuku.php";
		</script>
	<?php
	}
?>
