<?php
// Memanggil library FPDF
require('../fpdf/fpdf.php');

// Koneksi ke database
include 'config.php';

// Membuat instance FPDF
$pdf = new FPDF('L', 'mm', 'A4'); // Mode Landscape
$pdf->AddPage();

// Header Judul
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'INSTITUT CODING', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'LIST PESERTA BOOTCAMP', 0, 1, 'C');
$pdf->Ln(5); // Memberikan jarak

// Header Tabel
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(0, 123, 255); // Warna biru
$pdf->SetTextColor(255, 255, 255); // Warna putih
$pdf->Cell(10, 8, 'No', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'Foto', 1, 0, 'C', true);
$pdf->Cell(50, 8, 'Nama', 1, 0, 'C', true);
$pdf->Cell(50, 8, 'No. Telepon', 1, 0, 'C', true);
$pdf->Cell(70, 8, 'Email', 1, 0, 'C', true);
$pdf->Cell(60, 8, 'Bootcamp', 1, 1, 'C', true);

// Mengambil data dari database
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0); // Warna teks hitam
$query = mysqli_query($koneksi, "SELECT * FROM calon_peserta_bc");
$no = 1;

// Looping data peserta
while ($peserta = mysqli_fetch_array($query)) {
    $pdf->Cell(10, 30, $no++, 1, 0, 'C');
    
    // Menampilkan gambar
    $fotoPath = "uploads/" . $peserta['foto'];
    if (file_exists($fotoPath)) {
       // Tentukan ukuran gambar
    $lebarKolomFoto = 30; // Sesuai dengan lebar kolom
    $tinggiKolomFoto = 30; // Tinggi kolom yang diatur
    
    // Pastikan gambar sesuai proporsi
    list($lebarAsli, $tinggiAsli) = getimagesize($fotoPath);
    $scale = min($lebarKolomFoto / $lebarAsli, $tinggiKolomFoto / $tinggiAsli);
    $lebarGambar = $lebarAsli * $scale;
    $tinggiGambar = $tinggiAsli * $scale;
    
    // Posisi gambar dalam kolom
    $x = $pdf->GetX() + (($lebarKolomFoto - $lebarGambar) / 2); // Tengah horizontal
    $y = $pdf->GetY() + (($tinggiKolomFoto - $tinggiGambar) / 2); // Tengah vertikal
    
    // Menampilkan gambar
    $pdf->Image($fotoPath, $x, $y, $lebarGambar, $tinggiGambar);
    $pdf->Cell($lebarKolomFoto, $tinggiKolomFoto, '', 1, 0, 'C'); // Garis kolom
    } else {
        $pdf->Cell(30, 30, 'Tidak Ada Foto', 1, 0, 'C');
    }

    // Data lainnya
    $pdf->Cell(50, 30, $peserta['nama'], 1, 0, 'L');
    $pdf->Cell(50, 30, $peserta['no_telepon'], 1, 0, 'L');
    $pdf->Cell(70, 30, $peserta['email'], 1, 0, 'L');
    $pdf->Cell(60, 30, $peserta['bootcamp'], 1, 1, 'L');
}

// Output PDF
$pdf->Output('I', 'List_Peserta_Bootcamp.pdf');
?>
