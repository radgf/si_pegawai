<div class="card card-info">
	<div class="card-header" style="background-color: #5C469C;">
		<h3 class="card-title">Data Cuti</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-cuti&kode=<?php echo $data_nama; ?>" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>ID Cuti</th>
						<th>Jenis Cuti</th>
						<th>Nama</th>
						<th>Tanggal Awal</th>
						<th>Tanggal Akhir</th>
                        <th>Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>

					<?php
				$data_nama = $_GET['kode'];
				$no = 1;
				$sql = "SELECT * from tb_cuti WHERE nama='" . $_GET['kode'] . "'";
				$result = mysqli_query($koneksi, $sql); // $koneksi adalah objek koneksi ke database

				while ($data = mysqli_fetch_assoc($result))  {
			
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['id_cuti']; ?>
						</td>
						<td>
							<?php echo $data['nip']; ?>
						</td>
						<td>
							<?php echo $data['jeniscuti']; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_awal']; ?>
						</td>
                        <td>
							<?php echo $data['tanggal_akhir']; ?>
						</td>
                        <td>
							<?php echo $data['status']; ?>
						</td>

						<td>
							<a href="?page=view-cuti&kode=<?php echo $data['id_cuti'];?>&kode1=<?php echo $data_nama;?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=del-cuti&kode=<?php echo $data['id_cuti']; ?>&kode1=<?php echo $data_nama;?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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