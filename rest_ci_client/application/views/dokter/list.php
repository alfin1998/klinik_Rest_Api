<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Dokter</h4>
                <p class="category">Data Profil Dokter</p>
                <a href="http://localhost:8080/klinik/rest_ci_client/index.php/dokter/create" class="btn btn-success">Tambah data<a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                    	<th>Nama</th>
                    	<th>Spesialis</th>
                    	<th>Jenis Kelamin</th>
                    	<th>No Telepon</th>
                    	<th>Gaji</th>
                    	<th>ID Ruang</th>
                    	<th>Option</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($datadokter as $datadokter)
					{
						echo "<tr>
						<td>$datadokter->id_dokter</td>
						<td>$datadokter->nama</td>
						<td>$datadokter->spesialis</td>
						<td>$datadokter->jk</td>
						<td>$datadokter->tarif</td>
						<td>$datadokter->notelp</td>
						<td>$datadokter->id_ruang</td>
						<td>".anchor('dokter/edit/'.$datadokter->id_dokter, 'Edit')." |
						".anchor('dokter/delete/'.$datadokter->id_dokter, 'Delete',array('onclick'=>"return confirm('Do you want delete this record')"))."
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