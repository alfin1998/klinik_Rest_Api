<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Kasir</h4>
                <p class="category">Data kasir</p>
                <a href="http://localhost/klinik/rest_ci_client/index.php/kasir/create" class="btn btn-success">Tambah data<a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                    	<th>Nama</th>
                    	<th>Alamat</th>
                    	<th>No Telepon</th>
                    	<th>Option</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($datakasir as $kasir)
					{
						echo "<tr>
						<td>$kasir->id_kasir</td>
						<td>$kasir->nama</td>
						<td>$kasir->alamat</td>
						<td>$kasir->notelp</td>
						<td>".anchor('kasir/edit/'.$kasir->id_kasir, 'Edit')."
						".anchor('kasir/delete/'.$kasir->id_kasir, 'Delete',array('onclick'=>"return confirm('Do you want delete this record')"))."
						</td>
						</tr>";
					}
					?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>