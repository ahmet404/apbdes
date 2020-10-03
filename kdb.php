<?php
$kdb = new mysqli("localhost","fsociety","Indonesia45","db_peramalan");
if($kdb->connect_error){
	die("Gagal Terkoneksi: " .$kdb->connect_error);
}
?>
