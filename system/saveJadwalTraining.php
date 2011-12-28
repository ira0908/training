<?php
	
	include("../configuration/configuration.php");
	
	$id	=$_POST["id"];
	$a	=$_POST["id_paket_training"];
	$b	=$_POST["tanggal_mulai"];
	$c	=$_POST["tanggal_selesai"];
	$d	=$_POST["jam"];
	$e	=$_POST["hari"];
	$f	=$_POST["waktu"];
	$g	=$_POST["maksimal"];
	$h	=$_POST["harga_umum"];
	$i	=$_POST["harga_mahasiswa"];
	$j	=$_POST["lokasi"];
	$k	=$_POST["silabus"];
	$l	=$_POST["fasilitas"];
	$m	=$_POST["aktif"];
	$n	=$_POST["save"];
	
	$que2	=	mysql_query("SELECT * FROM Jadwal Training WHERE id='$id'");

	if($id!=null){
		mysql_query("UPDATE Jadwal_Training SET tanggal_mulai='$b', tanggal_selesai='$c', durasi_jam='$d', durasi_hari='$e', waktu_training='$f', maksimal_peserta='$g', harga_umum='$h', harga_mahasiswa='$i', lokasi_training='$j', silabus='$k', fasilitas='$l', aktif='$m' WHERE id='$id'");
	}
	else 
	{
		mysql_query("INSERT INTO Jadwal_Training (id_paket_training,tanggal_mulai,tanggal_selesai,durasi_jam,durasi_hari,waktu_training,maksimal_peserta,harga_umum,harga_mahasiswa,lokasi_training,silabus,fasilitas,aktif) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')")Or Die(mysql_error());
	}
	header("location:../listJadwalTrainingAdmin.php");
?>
