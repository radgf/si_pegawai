<?php
include('inc/koneksi.php');
$pegawai = mysqli_query($koneksi, "SELECT jns_klmn, COUNT(*) AS jumlah FROM data_pegawai GROUP BY jns_klmn");
$nama_produk = array();
$jumlah_produk = array();
while ($row = mysqli_fetch_array($pegawai)) {
    $nama_produk[] = $row['jns_klmn'];
    $jumlah_produk[] = $row['jumlah'];
}

$label = ["Umum", "Personalia", "Keuangan", "Pemasaran", "Accounting"];
$jumlah_pegawai = array();

for ($divisi = 9; $divisi < 20; $divisi++) {
    $query = mysqli_query($koneksi, "select sum(id_divisi) as total_pegawai from data_pegawai where id='$divisi'");
    $row = $query->fetch_array();
    $jumlah_pegawai[] = $row['total_pegawai'];
}
?>

<!doctype html>
<html>

<head>
    <title>Charts</title>
    <script type="text/javascript" src="Chart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Pie Chart</div>
                    <div class="card-body">
                        <canvas id="chart-area"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Bar Chart</div>
                    <div class="card-body">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var pieConfig = {
            type: 'pie',
            data: {
                datasets: [{
                    data: <?php echo json_encode($jumlah_produk); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    label: 'Presentase Pegawai'
                }],
                labels: <?php echo json_encode($nama_produk); ?>
            },
            options: {
                responsive: true
            }
        };

        var barConfig = {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($label); ?>,
                datasets: [{
                    label: 'Grafik Anggota Divisi',
                    data: <?php echo json_encode($jumlah_pegawai) ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        suggestedMin: 0
                    }
                }
            }
        };

        window.onload = function() {
            var ctx1 = document.getElementById('chart-area').getContext('2d');
            new Chart(ctx1, pieConfig);

            var ctx2 = document.getElementById('barChart').getContext('2d');
            new Chart(ctx2, barConfig);
        };
    </script>
</body>

</html>
