<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM master WHERE id_master='$id'");
$row = $edit->fetch_assoc();
?>
<form action="" method="POST">
	<h3>Edit Data Master</h3>
	<table class="tb-create">
		<tr>
			<td>Kode Master :<br><input type="text" name="kode_master" value="<?php echo $row['kode_master']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>Nama :<br><input type="text" name="nama" value="<?php echo $row['nama']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Edit" class="btn">
				<a href="index.php?hal=master">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$id = $_GET['id'];
$kode_master = $_POST['kode_master'];
$nama = $_POST['nama'];


$res = $kdb->query("UPDATE master SET kode_master= '$kode_master', nama = '$nama' WHERE master.id_master = '$id'");
	if($res){
		echo "<script>alert('Update data berhasil!');document.location.href='index.php?hal=master';</script>";
	} else{
		echo "<script>alert('Gagal! mengupdate data!');document.location.href='index.php?hal=master';</script>";
	}
}
?> 