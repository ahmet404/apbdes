
<form action="" method="POST">
	<h3>Tambah Data Master</h3>
	<table class="tb-create">
		<tr>
			<td>Kode Master :<br><input type="text" name="kode_master" class="input-field"></td>
		</tr>
		<tr>
			<td>Nama :<br><input type="text" name="nama" class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Tambah" class="btn">
				<a href="index.php?hal=master">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$kode_master = $_POST['kode_master'];
$nama= $_POST['nama'];

$res = $kdb->query("INSERT INTO master VALUES('','$kode_master','$nama')");
	if($res){
		echo 	"<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?hal=master';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?hal=master';</script>";
	}
}
?>