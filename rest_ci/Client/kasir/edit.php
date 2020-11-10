<?php echo form_open('kasir/edit');?>
<?php echo form_hidden('id',$datakasir[0]->id_kasir);?>
<h1>Data Kasir</h1>
<table>
<tr><td>ID</td><td><?php echo form_input('id_kasir',$datakasir[0]->id_kasir,"disabled");?></td></tr>
<tr><td>NAMA</td><td><?php echo form_input('nama',$datakasir[0]->nama);?></td></tr>
<tr><td>ALAMAT</td><td><?php echo form_input('alamat',$datakasir[0]->alamat);?></td></tr>
<tr><td>NOMOR</td><td><?php echo form_input('notelp',$datakasir[0]->notelp);?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('kasir','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>