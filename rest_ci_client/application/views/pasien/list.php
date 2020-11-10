<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Pasien</h4>
                <p class="category">Data Profil Pasien</p>
                <a href="http://localhost/klinik/rest_ci_client/index.php/pasien/create" class="btn btn-success">Tambah data<a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                    	<th>Nama</th>
                    	<th>Alamat</th>
                    	<th>Umur</th>
                    	<th>Gender</th>
                    	<th>No Telepon</th>
                    	<th>Option</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($datapasien as $pasien)
					{
						echo "<tr>
						<td>$pasien->id_pasien</td>
						<td>$pasien->nama</td>
						<td>$pasien->alamat</td>
						<td>$pasien->umur</td>
						<td>$pasien->jk</td>
						<td>$pasien->notelp</td>
						<td>".anchor('pasien/edit/'.$pasien->id_pasien, 'Edit')." |
						".anchor('pasien/delete/'.$pasien->id_pasien, 'Delete',array('onclick'=>"return confirm('Do you want delete this record')"))."
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