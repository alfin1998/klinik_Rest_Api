<?php echo form_open_multipart('resep/create');?>
<h1>Data Resep</h1>
<table>
	<tr><td>Pasien</td><td><?php echo form_input('id_pasien');?></td></tr>
	<tr><td>Obat</td><td><?php echo form_input('id_obat');?></td></tr>
	<tr><td>Dokter</td><td><?php echo form_input('id_dokter');?></td></tr>
	<tr><td>Kasir</td><td><?php echo form_input('id_kasir');?></td></tr>
	<tr><td>Biaya</td><td><?php echo form_input('biaya');?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit', 'Simpan');?>
		<?php echo anchor('resep', 'Kembali');?>
	</td></tr>
</table>
<?php
echo form_close();
?>