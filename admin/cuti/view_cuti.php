<?php
		$data_nama =  $_GET['kode1'];

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_cuti WHERE id_cuti='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Cuti</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
                    <tr>
							<td style="width: 150px">
								<b>Id Cuti</b>
							</td>
							<td>:
								<?php echo $data_cek['id_cuti']; ?>
							</td>
						</tr>
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
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Awal Cuti</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_awal']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Akhir Cuti</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_akhir']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status</b>
							</td>
							<td>:
								<?php echo $data_cek['status']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-cuti&kode=<?php echo $data_nama;?>" class="btn btn-warning">Kembali</a>

					<a href="./report/cetak-cuti.php?nip=<?php echo $data_cek['id_cuti']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-body">
				<h3 class="profile-username text-center">
					<?php echo $data_cek['nip']; ?>
					-
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>