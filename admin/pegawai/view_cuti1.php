<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from tb_cuti WHERE id_cuti='".$_GET['kode']."'";
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
                    <td style="width: 170px">
								<b>Id Cuti</b>
							</td>
							<td>:
								<?php echo $data_cek['id_cuti']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<b>NIP</b>
							</td>
							<td>:
								<?php echo $data_cek['nip']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<b>Nama</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<b>Tanggal Awal Cuti</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_awal']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<b>Tanggal Akhir Cuti</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_akhir']; ?>
							</td>
						</tr>
						<tr>
							<td>
								<b>Status</b>
							</td>
							<td>:
								<?php echo $data_cek['status']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-cuti1" class="btn btn-warning">Kembali</a>

					<a href="?page=konfir-pegawai&nip=<?php echo $data_cek['id_cuti']; ?>"
					 title="Cetak Data Pegawai" class="btn btn-primary">Konfirmasi</a>
				</div>
			</div>
		</div>
	</div>

</div>