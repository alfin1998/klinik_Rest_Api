<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Tambah Obat</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/obat/create" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stok</label>
                            <input type="text" name="stok" class="form-control" placeholder="No Telepon" required="required">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Company" required="required">
                        </div>
                    </div>
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Tambah Obat</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>