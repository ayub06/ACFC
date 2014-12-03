<?php

include "koneksi_database.php";

$sname=$_POST['nama_sekolah'];
$salmt=$_POST['alamat_sekolah'];
$phone=$_POST['telepon_sekolah'];
$oname=$_POST['nama_official'];
$ophone=$_POST['hp_official'];

$insert = "insert into `DATA_PENDAFTARAN_TIM` (`NAMA_SEKOLAH`, `ALAMAT_SEKOLAH`,`TELEPON_SEKOLAH`, `NAMA_OFFICIAL`, `NO_HP_OFFICIAL`)
values ('$sname', '$salmt', '$phone','$oname','$ophone');";

$insert_query = mysql_query($insert);

if($insert_query) {
	echo "Insert Record Berhasil"."<br>";
	echo "Anda Telah berhasil Menginput data:"."<br>";
	echo $sname."<br>".$salmt."<br>".$phone."<br>".$oname."<br>".$ophone; }
else
	echo "Gagal Insert Record";
?>
