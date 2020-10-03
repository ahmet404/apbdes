<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM user WHERE id_user = '$id'");
if($del){
	header('location:index.php?hal=user');
}
?>