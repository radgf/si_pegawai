<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM data_pegawai WHERE nip='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header" style="background-color: #5C469C;">
		<h3 class="card-title">
			Ubah Data Pegawai
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIP</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nip" name="nip" value="<?php echo $data_cek['nip']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Lengkap</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-4">
					<select name="jns_klmn" id="status" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['jns_klmn'] == "Laki-laki") echo "<option value='Laki-laki' selected>Laki-laki</option>";
                else echo "<option value='Laki-laki'>Laki-laki</option>";

                if ($data_cek['jns_klmn'] == "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
                else echo "<option value='Perempuan'>Perempuan</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tempat Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tmpt_lhr" name="tmpt_lhr" value="<?php echo $data_cek['tmpt_lhr']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?php echo $data_cek['tgl_lhr']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-4">
					<select name="agama" id="status" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['agama'] == "Islam") echo "<option value='Islam' selected>Islam</option>";
                else echo "<option value='Islam'>Islam</option>";

                if ($data_cek['agama'] == "Kristen") echo "<option value='Kristen' selected>Kristen</option>";
                else echo "<option value='Kristen'>Kristen</option>";

				if ($data_cek['agama'] == "Katolik") echo "<option value='Katolik' selected>Katolik</option>";
                else echo "<option value='Katolik'>Katolik</option>";

				if ($data_cek['agama'] == "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
                else echo "<option value='Hindu'>Hindu</option>";

				if ($data_cek['agama'] == "Buddha") echo "<option value='Buddha' selected>Buddha</option>";
                else echo "<option value='Buddha'>Buddha</option>";

				if ($data_cek['agama'] == "Khonghucu") echo "<option value='Khonghucu' selected>Khonghucu</option>";
                else echo "<option value='Khonghucu'>Khonghucu</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $data_cek['email']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Telepon</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $data_cek['no_telp']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $data_cek['jabatan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Divisi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="id_divisi" name="id_divisi" value="<?php echo $data_cek['id_divisi']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto Pegawai</label>
				<div class="col-sm-6">
					<img src="foto/<?php echo $data_cek['foto']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah Foto</label>
				<div class="col-sm-6">
					<input type="file" id="foto" name="foto">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'foto/';
	$nama_file = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/$foto")){
            unlink("foto/$foto");}

        $sql_ubah = "UPDATE data_pegawai SET
			nip='".$_POST['nip']."',
			nama='".$_POST['nama']."',
			jns_klmn='".$_POST['jns_klmn']."',
			tmpt_lhr='".$_POST['tmpt_lhr']."',
			tgl_lhr='".$_POST['tgl_lhr']."',
			agama='".$_POST['agama']."',
			alamat='".$_POST['alamat']."',
			email='".$_POST['email']."',
			no_telp='".$_POST['no_telp']."',
			jabatan='".$_POST['jabatan']."',
			id_divisi='".$_POST['id_divisi']."',
			tgl_msk='".$_POST['tgl_msk']."',
			foto='".$nama_file."'		
            WHERE nip='".$_POST['nip']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
		$sql_ubah = "UPDATE data_pegawai SET
		nip='".$_POST['nip']."',
		nama='".$_POST['nama']."',
		jns_klmn='".$_POST['jns_klmn']."',
		tmpt_lhr='".$_POST['tmpt_lhr']."',
		tgl_lhr='".$_POST['tgl_lhr']."',
		agama='".$_POST['agama']."',
		alamat='".$_POST['alamat']."',
		email='".$_POST['email']."',
		no_telp='".$_POST['no_telp']."',
		jabatan='".$_POST['jabatan']."',
		id_divisi='".$_POST['id_divisi']."',
		tgl_msk='".$_POST['tgl_msk']."'	
		WHERE nip='".$_POST['nip']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-pegawai';
            }
        })</script>";
    }
}