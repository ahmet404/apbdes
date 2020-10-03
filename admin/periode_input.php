
<form action="" method="POST">
	<h3>Tambah Data Periode</h3>
	<table class="tb-create">
		<tr>
			<td>Nama :<br><input type="text" name="nama" class="input-field"></td>
		</tr>
		<tr>
			<td>ID Master :<br><input type="text" name="id_master" class="input-field"></td>
		</tr>
        <tr>
			<td>Tahun :<br><input type="text" name="tahun" class="input-field"></td>
		</tr>
		<tr>
			<td>Pengeluaran :<br><input type="text" name="pengeluaran" class="input-field"></td>
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
$nama = $_POST['nama'];
$id_master = $_POST['id_master'];
$tahun= $_POST['tahun'];
$pengeluaran= $_POST['pengeluaran'];

$res = $kdb->query("INSERT INTO periode VALUES(NULL,'$nama', '$id_master','$tahun', '$pengeluaran')");
	if($res){
		echo 	"<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?hal=periode';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?hal=periode';</script>";
	}
}
?>
