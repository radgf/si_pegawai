<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from data_pegawai WHERE nip='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">
	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header" style="background-color: #5C469C;">
				<h3 class="card-title">Detail Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>NIP</b>
							</td>
							<td>:
								<?php echo $data_cek['nip']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Lengkap</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin</b>
							</td>
							<td>:
								<?php echo $data_cek['jns_klmn']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tempat Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tmpt_lhr']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Lahir</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_lhr']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Agama</b>
							</td>
							<td>:
								<?php echo $data_cek['agama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Email</b>
							</td>
							<td>:
								<?php echo $data_cek['email']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No Telepon</b>
							</td>
							<td>:
								<?php echo $data_cek['no_telp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['jabatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kode Divisi</b>
							</td>
							<td>:
								<?php echo $data_cek['id_divisi']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Masuk</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_msk']; ?>
							</td>
						</tr>
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-pegawai.php?nip=<?php echo $data_cek['nip']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header" style="background-color: #5C469C;">
				<center>
					<h3 class="card-title">
						Foto Pegawai
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="280px" />
				</div>
			</div>
		</div>
	</div>
</div>