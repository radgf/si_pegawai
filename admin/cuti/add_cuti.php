<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form  action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" name="nip" placeholder="NIP" class="form-control" require required pattern="[0-9]+">
                    <small class="form-text text-muted">Enter a valid number.</small>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pegawai</label>
				<div class="col-sm-5">
					<input type="text" name="nama" placeholder="Nama Pegawai" class="form-control" require>
				</div>
			</div>

            <div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Cuti</label>
				<div class="col-sm-5">
					<select name="jeniscuti" id="jeniscuti" class="form-control" required>
						<option>- Pilih -</option>
						<option>Cuti Tahunan</option>
						<option>Cuti Sakit</option>
						<option>Cuti Melhirkan</option>
						<option>Cuti Paternity</option>
						<option>Cuti Menikah</option>
						<option>Cuti Kematian</option>
						<option>Cuti Keluarga</option>
						<option>Cuti Studi</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Awal Cuti</label>
				<div class="col-sm-5">
                <input type="date" name="tanggal_awal" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Akhir Cuti</label>
				<div class="col-sm-5">
                <input type="date" name="tanggal_akhir" class="form-control">
				</div>
			</div>


		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
 
<?php

if (isset ($_POST['Simpan'])){
		$data_nama =  $_GET['kode'];
        $sql_simpan = "INSERT INTO tb_cuti (nip, nama, jeniscuti, tanggal_awal, tanggal_akhir, status) VALUES (
            '".$_POST['nip']."',
			'".$_POST['nama']."',
			'".$_POST['jeniscuti']."',
			'".$_POST['tanggal_awal']."',
			'".$_POST['tanggal_akhir']."',
			'diajukan')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-cuti&kode=$data_nama';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pegawai';
          }
      })</script>";
	}
	}

    
     //selesai proses simpan data
