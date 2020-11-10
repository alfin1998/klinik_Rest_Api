<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Dokter</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/dokter/edit" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required" value="<?=$datadokter[0]->nama?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control" required="required">
                            	<option value="Pria" <?php if('Pria' == $datadokter[0]->jk){ echo 'selected';} ?> >Pria</option>
                            	<option value="Wanita" <?php if('Wanita' == $datadokter[0]->jk){ echo 'selected';} ?>  >Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomer Telpon</label>
                            <input type="text" name="notelp" class="form-control" placeholder="No Telepon" required="required" value="<?=$datadokter[0]->notelp?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input type="text" name="spesialis" class="form-control" placeholder="Company" required="required" value="<?=$datadokter[0]->spesialis?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tarif</label>
                            <input type="text" name="tarif" class="form-control" placeholder="Last Name" required="required" value="<?=$datadokter[0]->tarif?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ruang</label>
                            <select name="id_ruang" id="id_ruang" class="form-control" required="required" required="required">
                            	<?php
                            	foreach ($dataRuang as $key) {
                            	?>
                            		<option value="<?=$key->id_ruang?>" <?php if($key->id_ruang == $datadokter[0]->id_ruang){ echo 'selected';} ?> ><?=$key->nama?></option>
                            	<?php
                            	}
                            	 ?>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_dokter" id="id_dokter" class="form-control" value="<?= $datadokter[0]->id_dokter?>">
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Tambah Dokter</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>