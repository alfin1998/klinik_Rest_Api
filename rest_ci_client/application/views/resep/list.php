<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Resep</h4>
                <p class="category">Data Resep</p>
                <a href="http://localhost/klinik/rest_ci_client/index.php/resep/create" class="btn btn-success">Tambah data<a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID Resep</th>
                    	<th>ID Pasien</th>
                    	<th>ID Obat</th>
                    	<th>ID Dokter</th>
                    	<th>ID Kasir</th>
                    	<th>Biaya</th>
                    	<th>Option</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($dataresep as $resep)
					{
						echo "<tr>
						<td>$resep->id_resep</td>
						<td>$resep->id_pasien</td>
						<td>$resep->id_obat</td>
						<td>$resep->id_dokter</td>
						<td>$resep->id_kasir</td>
						<td>$resep->biaya</td>
						<td>".anchor('resep/edit/'.$resep->id_resep, 'Edit')."
						".anchor('resep/delete/'.$resep->id_resep, 'Delete',array('onclick'=>"return confirm('Do you want delete this record')"))."
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