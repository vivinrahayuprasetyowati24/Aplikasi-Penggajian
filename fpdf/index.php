<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',20);
// mencetak string 
$pdf->Cell(190,7,'PT WIKRAMA JEPARA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PENGGAJIAN KARYAWAN',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'NIP',1,0);
$pdf->Cell(40,6,'NAMA',1,0);
$pdf->Cell(29,6,'TEMPAT LAHIR',1,0);
$pdf->Cell(31,6,'TANGGAL LAHIR',1,0);
$pdf->Cell(30,6,'KODE JABATAN',1,0);
$pdf->Cell(29,6,'STATUS',1,1);	
 
$pdf->SetFont('Arial','',10);
 
include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from pegawai");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(25,6,$row['NIP'],1,0);
    $pdf->Cell(40,6,$row['nama'],1,0);
    $pdf->Cell(29,6,$row['tempat_lahir'],1,0);
    $pdf->Cell(31,6,$row['tanggal_lahir'],1,0);
    $pdf->Cell(30,6,$row['kode_jabatan'],1,0);
    $pdf->Cell(29,6,$row['status'],1,1); 
}
 
$pdf->Output();
?>