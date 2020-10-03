<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM master WHERE id_master = '$id'");
if($del){
	header('location:index.php?hal=master');
}
?>