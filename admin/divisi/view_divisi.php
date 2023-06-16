<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from data_divisi WHERE kode='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
	$id_divisi=$data_cek['kode'];
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header" style="background-color: #5C469C;">
				<h3 class="card-title">Detail Divisi</h3>
				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Kode Divisi</b>
							</td>
							<td>:
								<?php 
						
								echo $data_cek['kode']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Divisi</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_divisi']; ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
				<div class="card-footer">
					<a href="?page=data-divisi" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</div>
	</div>
	<div class="card card-info">
	<div class="card-header" style="background-color: #5C469C;">
		<h3 class="card-title">
			Anggota Divisi
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
                        <th>Nama Pegawai</th>
						<th>Jabatan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
                    $no = 1;
                    $sql = $koneksi->query("SELECT nip, nama, jabatan from data_pegawai WHERE id_divisi = $id_divisi");
                    while ($data= $sql->fetch_assoc()) {
                    ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nip']; ?>
						</td>
                        <td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['jabatan']; ?>
						</td>
						<td>
							<a href="?page=view-pegawai&kode=<?php echo $data['nip']; ?>" title="Detail" class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
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
</div>