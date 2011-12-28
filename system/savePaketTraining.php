<?php
	include ("../configuration/configuration.php");
	
	$id		=$_POST["id"];
	$kode	=$_POST["kode_paket_training"];
	$nama	=$_POST["nama_paket_training"];
	
	if($id!=null){
		mysql_query("UPDATE Paket_Training SET kode_paket_training='$kode', nama_paket_training='$nama'");
	}
	else{
		mysql_query("insert into Paket_Training (kode_paket_training,nama_paket_training)values('$kode','$nama')");
	}
	header("location:../listPaketTraining.php");
?>
