<?php
	include "../inc/koneksi.php";
	
	$nip = $_GET['nip'];

	$sql_cek = "SELECT * FROM data_pegawai";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CETAK DATA PEGAWAI</title>
</head>
<body>

	<center>

		<h2>
			PT PEMWEB JAYA SELALU
		</h2>
		<h3>
			<hr size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from data_pegawai where nip='$nip'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
			?>
	</center>

	<center>
		<h4>
			<u>DATA PEGAWAI</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 90%" align="center">
		<tbody>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td>
					<?php echo $data['nip']; ?>
				</td>
				<td rowspan="6" align="center">
					<img src="../foto/<?php echo $data['foto']; ?>" width="150px" />
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data['jns_klmn']; ?>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tmpt_lhr']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tgl_lhr']; ?>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?php echo $data['agama']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['alamat']; ?>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<?php echo $data['email']; ?>
				</td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td>
					<?php echo $data['no_telp']; ?>
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>
					<?php echo $data['jabatan']; ?>
				</td>
			</tr>
			<tr>
				<td>Kode Divisi</td>
				<td>:</td>
				<td>
					<?php echo $data['id_divisi']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				<td>:</td>
				<td>
					<?php echo $data['tgl_msk']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>