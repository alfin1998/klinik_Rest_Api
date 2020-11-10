<font color="orange">
	<?php echo $this->session->flashdata('hasil');?>
</font>
<h1>Data Kasir</h1>
<table border="1">
	<tr><th>ID</th><th>NAMA</th><th>ALAMAT</th><th>NOTELP</th><th>Opsi</th></tr>
	<?php 
	foreach ($dataresep as $resep)
	{
		echo "<tr>
		<td>$resep->id_resep</td>
		<td>$resep->id_pasien</td>
		<td>$resep->id_obat</td>
		<td>$resep->id_dokter</td>
		<td>$resep->id_kasir</td>
		<td>$resep->biaya</td>
		<td>".anchor('resep/edit/'.$resep->id_resep, 'Edit')."
		".anchor('resep/delete/'.$resep->id_resep, 'Delete')."
		</td>
		</tr>";
	}
	?>
</table>
<a href="http://localhost/klinik/rest_ci_client/index.php/resep/create">+ Tambah data<a>
