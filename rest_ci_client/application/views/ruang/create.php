<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Tambah ruang</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/ruang/create" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required">
                        </div>
                    </div>
                </div>
                <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Tambah ruang</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>