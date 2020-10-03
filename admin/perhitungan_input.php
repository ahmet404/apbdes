<form method="POST">
	<h3>Prediksi Pengeluaran Dana Desa</h3>
	<table class="tb-create">
		<tr>
			<td>Tahun :<br><input type="text" name="tahun" class="input-field"/></td>
		<tr>
			<td>
				<input type="submit" name="create" value="Prediksi" class="btn">
				<a href="index.php?hal=perhitungan">Kembali</a>
			</td>
		</tr>
	</table>
</form>

<?php
function a(){
	require("../kdb.php");
	$sqa = $kdb->query("SELECT * FROM periode WHERE tahun='2015'");
	while($rowa = $sqa->fetch_assoc()){
		return $a = $rowa['pengeluaran'];
	}
}
function b(){
	require("../kdb.php");
	$sqb = $kdb->query("SELECT * FROM periode WHERE tahun='2016'");
	while($rowb = $sqb->fetch_assoc()){
		return $b = $rowb['pengeluaran'];
	}
}
function c(){
	require("../kdb.php");
	$sqc = $kdb->query("SELECT * FROM periode WHERE tahun='2017'");
	while($rowc = $sqc->fetch_assoc()){
		return $c = $rowc['pengeluaran'];
	}
}
function d(){
	require("../kdb.php");
	$sqd = $kdb->query("SELECT * FROM periode WHERE tahun='2018'");
	while($rowd = $sqd->fetch_assoc()){
		return $d = $rowd['pengeluaran'];
	}
}
function e(){
	require("../kdb.php");
	$sqe = $kdb->query("SELECT * FROM periode WHERE tahun='2019'");
	while($rowe = $sqe->fetch_assoc()){
		return $e = $rowe['pengeluaran'];
	}
}
if(isset($_POST['create']) && !empty($_POST['tahun'])){
	$tahun = $_POST['tahun'];
	$q = $kdb->query("SELECT * FROM periode WHERE tahun='$tahun'");
	if($tahun == 2016){
		$hasil = b();
	} elseif($tahun == 2017){
		$hasil = (a() + b()) / 2;
	} elseif($tahun == 2018){
		$hasil = (a() + b() + c()) / 3;
	} elseif($tahun == 2019){
		$hasil = (a() + b() + c() + d()) / 4;
	} elseif($tahun == 2020){
		$hasil = (a() + b() + c() + d() + e()) / 5;
	} else{
		echo "<script>alert('Gagal prediksi data! Hanya tahun 2017 - 2020');</script>";
	}

	$res = $kdb->query("INSERT INTO perhitungan VALUES(NULL, '$tahun','$hasil')");

	if($res){
		echo 	"<script>alert('Data berhasil di prediksi!');document.location.href='index.php?hal=perhitungan';</script>";
	} else{
		echo "<script>alert('Gagal prediksi data!');document.location.href='index.php?hal=perhitungan';</script>";
	}
}
?>
