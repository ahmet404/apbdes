<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM periode WHERE id_periode='$id'");
$row = $edit->fetch_assoc();
?>
<form action="" method="POST">
	<h3>Edit Data Periode</h3>
	<table class="tb-create">
		<tr>
			<td>Nama :<br><input type="text" name="nama" value="<?php echo $row['nama']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>ID Master :<br><input type="text" name="id_master" value="<?php echo $row['id_master']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>Tahun :<br><input type="text" name="tahun" value="<?php echo $row['tahun']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>Pengeluaran :<br><input type="text" name="pengeluaran" value="<?php echo $row['pengeluaran'];?>"class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Edit" class="btn">
				<a href="index.php?hal=periode">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$id = $_GET['id'];
$nama = $_POST['nama'];
$id_master = $_POST['id_master'];
$tahun= $_POST['tahun'];
$pengeluaran= $_POST['pengeluaran'];

$res = $kdb->query("UPDATE `periode` SET `nama` = '$nama', `id_master` = '$id_master', `tahun` = '$tahun', `pengeluaran` = '$pengeluaran' WHERE `periode`.`id_periode` = '$id'");
//$res = $kdb->query("UPDATE periode SET nama= '$nama', id_master = '$id_master', tgl = '$tahun', pengeluaran = '$pengeluaran' WHERE periode.id_periode = '$id'");
	if($res){
		echo "<script>alert('Update data berhasil!');document.location.href='index.php?hal=periode';</script>";
	} else{
		echo "<script>alert('Gagal! mengupdate data!');document.location.href='index.php?hal=periode';</script>";
	}
}
?> 
