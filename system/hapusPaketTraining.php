<?php
include ("../configuration/configuration.php");
$id=$_GET['id'];
//connect misal :
mysql_query("delete from Paket_Training where id='$id'");
header("location:../listPaketTraining.php"); 
?>
