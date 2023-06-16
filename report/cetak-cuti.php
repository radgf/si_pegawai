<?php
	include "../inc/koneksi.php";
	
	$id = $_GET['nip'];

	$sql_cek = "SELECT * FROM tb_cuti where id_cuti='$id'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CETAK DATA CUTI</title>
</head>
<body>

	<center>
		<h2>
			<?php echo $data_cek['nip']; ?>
		</h2>
		<h3>
			<?php echo $data_cek['nama']; ?>
			<hr / size="2px" color="black">

			<?php
			}

			$sql_tampil = "select * from tb_cuti where id_cuti='$id'";
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
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Awal Cuti</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_awal']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Akhir Cuti</td>
				<td>:</td>
				<td>
					<?php echo $data['tanggal_akhir']; ?>
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<?php echo $data['status']; ?>
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