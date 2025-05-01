<?php
// Konstanta pajak
define("PAJAK", 0.10);

// Array harga barang
$barang = array(
    "Keyboard" => 150000,
    "Mouse" => 80000,
    "Monitor" => 1200000
);

// Pilih barang yang ingin dihitung (misalnya: Keyboard)
$namaBarang = "Keyboard";
$hargaSatuan = $barang[$namaBarang];

// Variabel jumlah beli
$jumlahBeli = 2;

// Hitung total sebelum pajak
$totalSebelumPajak = $hargaSatuan * $jumlahBeli;

// Hitung pajak
$pajak = $totalSebelumPajak * PAJAK;

// Hitung total bayar
$totalBayar = $totalSebelumPajak + $pajak;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f7f7f7;
            padding: 40px;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.1em;
            margin: 8px 0;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
        <hr>
        <p>Nama Barang: <span class="bold"><?= $namaBarang ?></span></p>
        <p>Harga Satuan: Rp <?= number_format($hargaSatuan, 0, ',', '.') ?></p>
        <p>Jumlah Beli: <?= $jumlahBeli ?></p>
        <p>Total Harga (Sebelum Pajak): Rp <?= number_format($totalSebelumPajak, 0, ',', '.') ?></p>
        <p>Pajak (10%): Rp <?= number_format($pajak, 0, ',', '.') ?></p>
        <p class="bold">Total Bayar: Rp <?= number_format($totalBayar, 0, ',', '.') ?></p>
    </div>
</body>
</html>
