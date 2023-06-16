<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM data_divisi WHERE kode='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header" style="background-color: #5C469C;">
		<h3 class="card-title">
            Ubah Data Divisi
        </h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode Divisi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="kode" name="kode" value="<?php echo $data_cek['kode']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Divisi</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama_divisi" name="nama_divisi" value="<?php echo $data_cek['nama_divisi']; ?>"
					/>
				</div>
			</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-divisi" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
        $sql_ubah = "UPDATE data_divisi SET
            kode='".$_POST['kode']."',
            nama_divisi='".$_POST['nama_divisi']."'
            WHERE kode='".$_POST['kode']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);


        if ($query_ubah) {
            echo "<script>
            Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=data-divisi';
                }
            })</script>";
            }else{
            echo "<script>
            Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    window.location = 'index.php?page=data-divisi';
                }
            })</script>";
        }
    }

    

?>