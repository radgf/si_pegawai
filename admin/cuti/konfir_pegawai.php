<?php

    if(isset($_GET['nip'])){
        $sql_cek = "SELECT * FROM tb_cuti WHERE id_cuti='".$_GET['nip']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>



<?php
	
	


    
        $sql_ubah = "UPDATE tb_cuti SET
			status ='dikonfirmasi' where id_cuti = '".$_GET['nip']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Data Cuti Dikonfirmasi',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-cuti1';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-cuti1';
            }
        })</script>";
    }


