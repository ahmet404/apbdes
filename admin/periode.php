<section class="content">
<h3>Data Periode</h3>
<a class="btn add" href="index.php?hal=periode&aksi=input">Tambah</a>
	<table width="100%" border="1">
		<tr>
			<th>No</th>
			<th>ID Periode</th>
			<th>ID Master</th>
			<th>Nama</th>
			<th>Tahun</th>
			<th>Pengeluaran</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$i = 1;
			$q = $kdb->query("SELECT * FROM periode");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['id_periode'];?></td>
			<td><?php echo $row['id_master'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['tahun'];?></td>
			<td><?php echo "Rp.".rupiah ($row['pengeluaran']);?></td>
			<td><a class="btn edit" href="index.php?hal=periode&aksi=edit&id=<?php echo $row['id_periode'];?>">Edit</a></td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=periode&aksi=delete&id=<?php echo $row['id_periode'];?>">Hapus</a></td>
			
		<?php }?>
		</tr>
	</table>
</section>