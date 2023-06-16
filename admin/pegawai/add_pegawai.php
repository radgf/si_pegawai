<div class="card card-primary">
	<div class="card-header" style="background-color: #5C469C;">
		<h3 class="card-title">
			Tambah Data Pegawai
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jns_klmn" id="laki" value="Laki-laki">
						<label class="form-check-label" for="laki">
							Laki-laki
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jns_klmn" id="perempuan" value="Perempuan">
						<label class="form-check-label" for="perempuan">
							Perempuan
						</label>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" placeholder="Tempat Lahir" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-5">
					<select name="agama" id="agama" class="form-control">
						<option>- Pilih -</option>
						<option>Islam</option>
						<option>Kristen</option>
						<option>Katolik</option>
						<option>Hindu</option>
						<option>Buddha</option>
						<option>Khonghucu</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telepon</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telepon" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Divisi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id_divisi" name="id_divisi" placeholder="Kode Divisi" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Masuk</label>
				<div class="col-sm-5">
					<input type="date" class="form-control" id="tgl_msk" name="tgl_msk" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO data_pegawai (nip, nama, jns_klmn, tmpt_lhr, tgl_lhr, agama, alamat, email, no_telp, jabatan, id_divisi, tgl_msk, foto) VALUES (
            '".$_POST['nip']."',
			'".$_POST['nama']."',
			'".$_POST['jns_klmn']."',
			'".$_POST['tmpt_lhr']."',
			'".$_POST['tgl_lhr']."',
			'".$_POST['agama']."',
			'".$_POST['alamat']."',
			'".$_POST['email']."',
			'".$_POST['no_telp']."',
			'".$_POST['jabatan']."',
			'".$_POST['id_divisi']."',
			'".$_POST['tgl_msk']."',
            '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pegawai';
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
	}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-pegawai';
			}
		})</script>";
	}
	}
     //selesai proses simpan data
