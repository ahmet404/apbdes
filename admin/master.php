<section class="content">
<h3>Data Master</h3>
<a class="btn add" href="index.php?hal=master&aksi=input">Tambah</a>
	<table width="100%" border="1">
		<tr>
			<th>No</th>
			<th>ID Master</th>
			<th>Kode Master</th>
			<th>Nama</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$i = 1;
			$q = $kdb->query("SELECT * FROM master");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['id_master'];?></td>
			<td><?php echo $row['kode_master'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><a class="btn edit" href="index.php?hal=master&aksi=edit&id=<?php echo $row['id_master'];?>">Edit</a></td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=master&aksi=delete&id=<?php echo $row['id_master'];?>">Hapus</a></td>
		<?php }?>
		</tr>
	</table>
</section>