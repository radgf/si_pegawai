<?php
include "../inc/koneksi.php";
require '../plugins/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'NIP');
$sheet->setCellValue('C1', 'Nama Lengkap');
$sheet->setCellValue('D1', 'Jenis Kelamin');
$sheet->setCellValue('E1', 'Tempat Lahir');
$sheet->setCellValue('F1', 'Tanggal Lahir');
$sheet->setCellValue('G1', 'Agama');
$sheet->setCellValue('H1', 'Alamat');
$sheet->setCellValue('I1', 'Email');
$sheet->setCellValue('J1', 'No Telepon');
$sheet->setCellValue('K1', 'Jabatan');
$sheet->setCellValue('L1', 'Kode Divisi');
$sheet->setCellValue('M1', 'Tanggal Masuk');

$query = mysqli_query($koneksi,"select * from data_pegawai");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A' .$i, $no++);
    $sheet->setCellValue('B' .$i, $row['nip']);
    $sheet->setCellValue('C' .$i, $row['nama']);
    $sheet->setCellValue('D' .$i, $row['jns_klmn']);
    $sheet->setCellValue('E' .$i, $row['tmpt_lhr']);
    $sheet->setCellValue('F' .$i, $row['tgl_lhr']);
    $sheet->setCellValue('G' .$i, $row['agama']);
    $sheet->setCellValue('H' .$i, $row['alamat']);
    $sheet->setCellValue('I' .$i, $row['email']);
    $sheet->setCellValue('J' .$i, $row['no_telp']);
    $sheet->setCellValue('K' .$i, $row['jabatan']);
    $sheet->setCellValue('L' .$i, $row['id_divisi']);
    $sheet->setCellValue('M' .$i, $row['tgl_msk']);
    $i++;
}

$styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
$i = $i - 1;
$sheet->getStyle('A1:N'.$i)->applyFromArray($styleArray);

// Mengatur warna latar belakang pada header kolom
$headerStyle = $sheet->getStyle('A1:AV1');
$headerFill = $headerStyle->getFill();
$headerFill->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$headerFill->getStartColor()->setARGB('DDE6ED');

// Mengatur lebar kolom secara otomatis
$sheet->getColumnDimension('A')->setAutoSize(true);
$sheet->getColumnDimension('B')->setAutoSize(true);
$sheet->getColumnDimension('C')->setAutoSize(true);
$sheet->getColumnDimension('D')->setAutoSize(true);
$sheet->getColumnDimension('E')->setAutoSize(true);
$sheet->getColumnDimension('F')->setAutoSize(true);
$sheet->getColumnDimension('G')->setAutoSize(true);
$sheet->getColumnDimension('H')->setAutoSize(true);
$sheet->getColumnDimension('I')->setAutoSize(true);
$sheet->getColumnDimension('J')->setAutoSize(true);
$sheet->getColumnDimension('K')->setAutoSize(true);
$sheet->getColumnDimension('L')->setAutoSize(true);
$sheet->getColumnDimension('M')->setAutoSize(true);

// Menyimpan Spreadsheet ke dalam file Excel
$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pegawai.xlsx');
?>