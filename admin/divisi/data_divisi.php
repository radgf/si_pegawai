<div class="card card-info">
	<div class="card-header" style="background-color: #5C469C;">
		<h3 class="card-title">
			Data Divisi
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-divisi" class="btn btn-primary">
					<i class="fa fa-edit"></i>Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
                        <th>Kode Divisi</th>
						<th>Nama Divisi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
                    $no = 1;
                    $sql = $koneksi->query("SELECT * from data_divisi");
                    while ($data= $sql->fetch_assoc()) {
                    ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
                        <td>
							<?php echo $data['kode']; ?>
						</td>
						<td>
							<?php echo $data['nama_divisi']; ?>
						</td>
						<td>
							<a href="?page=view-divisi&kode=<?php echo $data['kode']; ?>" title="Detail" class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-divisi&kode=<?php echo $data['kode']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-divisi&kode=<?php echo $data['kode']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
                    }
                    ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->