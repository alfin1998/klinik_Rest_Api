<?php echo form_open_multipart('kasir/create');?>
<h1>Data Profil Dokter</h1>
<table>
	<tr><td>Nama</td><td><?php echo form_input('nama');?></td></tr>
	<tr><td>Alamat</td><td><?php echo form_input('alamat');?></td></tr>
	<tr><td>No Telp</td><td><?php echo form_input('notelp');?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit', 'Simpan');?>
		<?php echo anchor('kasir', 'Kembali');?>
	</td></tr>
</table>
<?php
echo form_close();
?>