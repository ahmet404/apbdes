<section class="content">
<h3>Data Admin</h3>
<a class="btn add" href="index.php?hal=user&aksi=input">Tambah</a>
	<table width="100%" border="1">
		<tr>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$q = $kdb->query("SELECT * FROM user JOIN level ON user.id_level = level.id_level");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['nama_level'];?></td>
			<td><a class="btn edit" href="index.php?hal=user&aksi=edit&id=<?php echo $row['id_user'];?>">Edit</a></td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=user&aksi=delete&id=<?php echo $row['id_user'];?>">Hapus</a></td>
		<?php }?>
		</tr>
	</table>
</section>