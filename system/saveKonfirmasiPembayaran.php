<?php
include ("../configuration/configuration.php");

$no_pendaftaran = $_POST['no_pendaftaran'];
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$nominal = $_POST['nominal'];
$pembayaran = $_POST['pembayaran'];
$dari_rekening = $_POST['dari_rekening'];
$keterangan = $_POST['keterangan'];
$input=mysql_query("insert into Konfirmasi_Pembayaran (no_pendaftaran,tanggal_pembayaran,nominal,pembayaran,dari_rekening,keterangan)values('$no_pendaftaran','$tanggal_pendaftaran','$nominal','$pembayaran','$dari_rekening','$keterangan')")Or Die(mysql_error());
if($input){
	echo"<script>alert('Terima kasih telah melakukan konfirmasi pembayaran');location='../listKonfirmasiPembayaran.php';</script>";
	}else{
	echo"<script>location:javascript.history.go(-1);</script>";	
		}
?>
