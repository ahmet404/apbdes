<section class="content">
<a class="btn add" href="index.php?hal=perhitungan&aksi=input">Prediksi</a>
	<table width="100%" border="1">
		<tr>
			<th>No</th>
			<th>ID Periode</th>
			<th>ID Master</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Pengeluaran</th>
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
		<?php }?>
		</tr>
		<tr>
		<td align="center" colspan="5"><b>Total</b></td>
		<td align="center">
			
			<?php
				
					$query = mysqli_query($kdb, "SELECT SUM(pengeluaran) AS total FROM `periode`") or die(mysqli_error());
					$fetch = mysqli_fetch_array($query);
			?>
				<label class="text-danger"><b><?php echo "Rp.".rupiah ($fetch['total'])?></b></label>
			
		</td>
	</tr>
	</table><br><br><br><br>
	<h3>Data Hasil Prediksi</h3>
	<table width="100%" border="1">
		<tr>
			<th>ID Perhitungan</th>
			<th>Tahun</th>
			<th>Hasil Prediksi</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$q = $kdb->query("SELECT * FROM perhitungan");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $row['id_perhitungan'];?></td>
			<td><?php echo $row['tahun'];?></td>
			<td><?php echo "Rp.".rupiah ($row['hasil']);?></td>
			<td align="center"><a href="index.php?hal=rumus" class="btn edit">Lihat Rumus</td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=perhitungan&aksi=delete&id=<?php echo $row['id_perhitungan'];?>">Hapus</a></td>
		<?php }?>
		</tr>
	</table>
</section>