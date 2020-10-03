<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM perhitungan WHERE id_perhitungan = '$id'");
if($del){
	header('location:index.php?hal=perhitungan');
}
?>