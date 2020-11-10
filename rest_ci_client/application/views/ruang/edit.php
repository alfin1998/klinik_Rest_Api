<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit ruang</h4>
        </div>
        <div class="content">
            <form action="<?= base_url();?>index.php/ruang/edit" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Company" required="required" value="<?=$dataruang[0]->nama?>">
                        </div>
                    </div>
                <input type="hidden" name="id_ruang" id="id_ruang" class="form-control" value="<?= $dataruang[0]->id_ruang?>">
                <div class="clearfix"></div>
            </form>
            <button name="submit" id="submit" type="submit" class="btn btn-info btn-fill pull-right">Edit ruang</button>
        </div>
    </div>
</div>