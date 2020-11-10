<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Tambah Resep</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/resep/edit" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pasien</label>
                            <select name="id_pasien" id="id_pasien" class="form-control" required="required" required="required">
                            	<?php
                            	foreach ($datapasien as $key) {
                            	?>
                            		<option value="<?=$key->id_pasien?>" <?php if($key->id_pasien == $datapasien[0]->id_pasien){ echo 'selected';} ?> ><?=$key->nama?></option>
                            	<?php
                            	}
                            	 ?>
                            </select>
                        </div>
                   	<div class="col-md-12">
                        <div class="form-group">
                            <label>Obat</label>
                            <select name="id_obat" id="id_obat" class="form-control" required="required" required="required">
                            	<?php
                            	foreach ($dataobat as $key) {
                            	?>
                            		<option value="<?=$key->id_obat?>" <?php if($key->id_obat == $dataobat[0]->id_obat){ echo 'selected';} ?> ><?=$key->nama?></option>
                            	<?php
                            	}
                            	 ?>
                            </select>
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Dokter</label>
                            <select name="id_dokter" id="id_dokter" class="form-control" required="required" required="required">
                            	<?php
                            	foreach ($datadokter as $key) {
                            	?>
                            		<option value="<?=$key->id_dokter?>" <?php if($key->id_dokter == $datadokter[0]->id_dokter){ echo 'selected';} ?> ><?=$key->nama?></option>
                            	<?php
                            	}
                            	 ?>
                            </select>
                        </div>
                    </div>
                </div>
				<div class="col-md-12">
                        <div class="form-group">
                            <label>Kasir</label>
                            <select name="id_kasir" id="id_kasir" class="form-control" required="required" required="required">
                            	<?php
                            	foreach ($datakasir as $key) {
                            	?>
                            		<option value="<?=$key->id_kasir?>" <?php if($key->id_kasir == $datakasir[0]->id_kasir){ echo 'selected';} ?> ><?=$key->nama?></option>
                            	<?php
                            	}
                            	 ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" name="biaya" class="form-control" placeholder="Last Name" required="required" value="<?=$dataresep[0]->biaya?>">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_resep" id="id_resep" class="form-control" value="<?= $dataresep[0]->id_resep?>">
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Edit Resep</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>