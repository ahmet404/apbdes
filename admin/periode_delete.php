<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM periode WHERE id_periode = '$id'");
if($del){
	header('location:index.php?hal=periode');
}
?>