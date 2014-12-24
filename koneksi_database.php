<?php
$host = "mysql17.000webhost.com";
$username = "a9251276_ayub";
$password = "5h4lahudin";
$database = "a9251276_ayub";
$koneksi = mysql_connect($host, $username, $password);

$pilihdatabase = mysql_select_db($database, $koneksi);
if ($pilihdatabase) echo "Berhasil";
else echo "Gagal Koneksi";
?>
