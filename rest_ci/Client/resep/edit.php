<?php echo form_open('resep/edit');?>
<?php echo form_hidden('id',$dataresep[0]->id_resep); var_dump($dataresep)?>

<h1>Data Kasir</h1>
<table>
<tr><td>ID</td><td><?php echo form_input('id_resep',$dataresep[0]->id_resep,"disabled");?></td></tr>
<tr><td>PASIEN</td><td><?php echo form_input('id_pasien',$dataresep[0]->id_pasien);?></td></tr>
<tr><td>OBAT</td><td><?php echo form_input('id_obat',$dataresep[0]->id_obat);?></td></tr>
<tr><td>DOKTER</td><td><?php echo form_input('id_dokter',$dataresep[0]->id_dokter);?></td></tr>
<tr><td>KASIR</td><td><?php echo form_input('id_kasir',$dataresep[0]->id_kasir);?></td></tr>
<tr><td>BIAYA</td><td><?php echo form_input('biaya',$dataresep[0]->biaya);?></td></tr>
<tr><td colspan="2">
<?php echo form_submit('submit','Simpan');?>
<?php echo anchor('resep','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>