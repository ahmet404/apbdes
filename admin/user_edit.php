<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM user WHERE id_user='$id'");
$row = $edit->fetch_assoc();
?>
<form action="" method="POST">
	<h3>Edit Admin</h3>
	<table class="tb-create">
		<tr>
			<td>Nama :<br><input type="text" name="nama" value="<?php echo $row['nama']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>Username :<br><input type="text" name="user" value="<?php echo $row['username']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>Password :<br><input type="password" name="pass" value="<?php echo $row['password']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Edit" class="btn">
				<a href="index.php?hal=user">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$id = $_GET['id'];
$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = $_POST['pass'];


$res = $kdb->query("UPDATE user SET nama= '$nama', username = '$user', password = '$pass' WHERE user.id_user = '$id'");
	if($res){
		echo "<script>alert('Update data berhasil!');document.location.href='index.php?hal=user';</script>";
	} else{
		echo "<script>alert('Gagal! mengupdate data!');document.location.href='index.php?hal=user';</script>";
	}
}
?>