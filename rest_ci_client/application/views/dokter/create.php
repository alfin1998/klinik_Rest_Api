<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Tambah Dokter</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/dokter/create" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control" required="required">
                            	<option value="Pria">Pria</option>
                            	<option value="Wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomer Telpon</label>
                            <input type="text" name="notelp" class="form-control" placeholder="No Telepon" required="required">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Spesialis</label>
                            <input type="text" name="spesialis" class="form-control" placeholder="Company" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tarif</label>
                            <input type="text" name="tarif" class="form-control" placeholder="Last Name" required="required">
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
                            		<option value="<?=$key->id_ruang?>"><?=$key->nama?></option>
                            	<?php
                            	}
                            	 ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Tambah Obat</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>