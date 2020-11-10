<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Pasien</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/pasien/edit" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required" value="<?=$datapasien[0]->nama?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="No Telepon" required="required" value="<?=$datapasien[0]->alamat?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="text" name="umur" class="form-control" placeholder="Company" required="required" value="<?=$datapasien[0]->umur?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="jk" id="jk" class="form-control" required="required">
                                <option value="Pria" <?php if('Pria' == $datapasien[0]->jk){ echo 'selected';} ?> >Pria</option>
                                <option value="Wanita" <?php if('Wanita' == $datapasien[0]->jk){ echo 'selected';} ?>  >Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="notelp" class="form-control" placeholder="Last Name" required="required" value="<?=$datapasien[0]->notelp?>">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_pasien" id="id_pasien" class="form-control" value="<?= $datapasien[0]->id_pasien?>">
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Tambah pasien</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>