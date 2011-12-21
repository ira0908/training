<?php
include ("../configuration/configuration.php");
$id=$_GET['id'];
//connect misal :
mysql_query("delete from Jadwal_Training where id='$id'");
header("location:../listJadwalTrainingAdmin.php"); 
?>
