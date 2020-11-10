<font color="orange">
	<?php echo $this->session->flashdata('hasil');?>
</font>
<h1>Data Kasir</h1>
<table border="1">
	<tr><th>ID</th><th>NAMA</th><th>ALAMAT</th><th>NOTELP</th><th>Opsi</th></tr>
	<?php 
	foreach ($datakasir as $kasir)
	{
		echo "<tr>
		<td>$kasir->id_kasir</td>
		<td>$kasir->nama</td>
		<td>$kasir->alamat</td>
		<td>$kasir->notelp</td>
		<td>".anchor('kasir/edit/'.$kasir->id_kasir, 'Edit')."
		".anchor('kasir/delete/'.$kasir->id_kasir, 'Delete')."
		</td>
		</tr>";
	}
	?>
</table>
<a href="http://localhost/klinik/rest_ci_client/index.php/kasir/create">+ Tambah data<a>