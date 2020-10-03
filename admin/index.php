<?php
require('../kdb.php');
session_start();
if(!isset($_SESSION['level1'])){
	header('location:../index.php?msg');
}
include  'rupiah.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Dashboard</title>
	<link rel="stylesheet" type="text/css" 
	href="css/style.css">
</head>
<body>
<div class="container">
<header>
	<h2><span style="color:#333;">Prediksi</span> Dana Desa</h2>
	<h3>
	<?php echo $_SESSION['nama1']. ' - '. $_SESSION['level1']; ?></h3>
		<ul>
			<p>MAIN NAVIGATION</p>
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="index.php?hal=user">User</a></li>
			<li><a href="index.php?hal=master">Master</a></li>
			<li><a href="index.php?hal=periode">Periode</a></li>
			<li><a href="index.php?hal=perhitungan">Perhitungan</a></li>
			<li><a onclick="return confirm('Apakah anda yakin ingin keluar?');" href="logout.php">Logout</a></li> 
		</ul> 
</header>
<content>
	<div class="garis"></div>
	<?php 
		if(isset($_GET["hal"])){
			if($_GET['hal'] == "master"){
				if(@$_GET["aksi"]=="input"){
					require_once "master_input.php";
				}else if(@$_GET["aksi"]=="edit"){
					require_once "master_edit.php";
				}else if(@$_GET["aksi"]=="delete"){
					require_once "master_delete.php";
				}else if(@$_GET["aksi"]=="ekspor"){
					require_once "master_ekspor.php";
				}else{
					require_once "master.php";
				}
			}else if($_GET["hal"] == "periode"){
				if(@$_GET["aksi"]=="input"){
					require_once "periode_input.php";
				}else if(@$_GET["aksi"]=="edit"){
					require_once "periode_edit.php";
				}else if(@$_GET["aksi"]=="delete"){
					require_once "periode_delete.php";
				}else{
					require_once "periode.php";
				}
			}else if($_GET["hal"] == "perhitungan"){
				if(@$_GET["aksi"]=="input"){
					require_once "perhitungan_input.php";
				}else if(@$_GET["aksi"]=="edit"){
					require_once "perhitungan_edit.php";
				}else if(@$_GET["aksi"]=="delete"){
					require_once "perhitungan_delete.php";
				}else{
					require "perhitungan.php";
				}
			}else if($_GET["hal"] == "rumus"){
				if(@$_GET["aksi"]=="delete"){
					require_once "rumus_delete.php";
				} else{
					require_once "rumus.php";
				}
			
			}else if($_GET["hal"] == "user"){	
				if ($_SESSION['level1']=='admin'){
					if(@$_GET["aksi"]=="input"){
						require_once "user_input.php";
					}else if(@$_GET["aksi"]=="edit"){
						require_once "user_edit.php";
					}else if(@$_GET["aksi"] == "delete"){
						require_once "user_delete.php";	
					}else{
						require_once "user.php";
					}
				}else{
					require "welcome.php";
				}
			}else{
				require "welcome.php";
			}
		} else{
				require "welcome.php";
			}
			
		?>
</content>
</div>
</body>
</html>