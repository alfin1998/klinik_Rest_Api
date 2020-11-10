<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit obat</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/obat/edit" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required" value="<?=$dataobat[0]->nama?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="text" name="stok" class="form-control" placeholder="No Telepon" required="required" value="<?=$dataobat[0]->stok?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Company" required="required" value="<?=$dataobat[0]->harga?>">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_obat" id="id_obat" class="form-control" value="<?= $dataobat[0]->id_obat?>">
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Tambah obat</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>