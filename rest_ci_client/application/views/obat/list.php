<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Obat</h4>
                <p class="category">Data Obat</p>
                <a href="http://localhost:8080/klinik/rest_ci_client/index.php/obat/create" class="btn btn-success">Tambah data<a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                    	<th>Nama</th>
                    	<th>Stok</th>
                    	<th>harga</th>
                    	<th>Option</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($dataobat as $obat)
					{
						echo "<tr>
						<td>$obat->id_obat</td>
						<td>$obat->nama</td>
						<td>$obat->stok</td>
						<td>$obat->harga</td>
						<td>".anchor('obat/edit/'.$obat->id_obat, 'Edit')."
						".anchor('obat/delete/'.$obat->id_obat, 'Delete',array('onclick'=>"return confirm('Do you want delete this record')"))."
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