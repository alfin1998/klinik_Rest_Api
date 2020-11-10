<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Dokter</h4>
                <p class="category">Data Profil Dokter</p>
                <a href="http://localhost/klinik/rest_ci_client/index.php/dokter/create" class="btn btn-success">Tambah data<a>
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
                    foreach ($datadokter as $dokter)
					{
						echo "<tr>
						<td>$dokter->id_dokter</td>
						<td>$dokter->nama</td>
						<td>$dokter->spesialis</td>
						<td>$dokter->jk</td>
						<td>$dokter->tarif</td>
						<td>$dokter->notelp</td>
						<td>$dokter->id_ruang</td>
						<td>".anchor('dokter/edit/'.$dokter->id_dokter, 'Edit')." |
						".anchor('dokter/delete/'.$dokter->id_dokter, 'Delete',array('onclick'=>"return confirm('Do you want delete this record')"))."
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