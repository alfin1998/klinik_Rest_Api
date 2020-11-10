<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Ruang</h4>
                <p class="category">Data Ruang</p>
                <a href="http://localhost/klinik/rest_ci_client/index.php/ruang/create" class="btn btn-success">Tambah data<a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID ruang</th>
                    	<th>Nama</th>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($dataruang as $ruang)
					{
						echo "<tr>
						<td>$ruang->id_ruang</td>
						<td>$ruang->nama</td>
						<td>".anchor('ruang/edit/'.$ruang->id_ruang, 'Edit')."
						".anchor('ruang/delete/'.$ruang->id_ruang, 'Delete',array('onclick'=>"return confirm('Do you want delete this record')"))."
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