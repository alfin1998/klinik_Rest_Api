<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Kasir</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/kasir/edit" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required" value="<?=$datakasir[0]->nama?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="No Telepon" required="required" value="<?=$datakasir[0]->alamat?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="notelp" class="form-control" placeholder="Company" required="required" value="<?=$datakasir[0]->notelp?>">
                        </div>
                    </div>
                <input type="hidden" name="id_kasir" id="id_kasir" class="form-control" value="<?= $datakasir[0]->id_kasir?>">
                <div class="clearfix"></div>
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Tambah Kasir</button>
            </form>
        </div>
    </div>
</div>