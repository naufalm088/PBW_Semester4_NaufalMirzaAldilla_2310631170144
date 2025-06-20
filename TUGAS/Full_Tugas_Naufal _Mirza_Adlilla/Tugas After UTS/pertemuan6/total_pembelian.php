<?php
define("PAJAK", 0.10); // 10% Pajak

$barang = [
    "Keyboard" => 150000,
    "Mouse" => 80000,
    "Monitor" => 1200000
];

$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaBarang = $_POST['nama_barang'];
    $jumlahBeli = (int) $_POST['jumlah'];
    $hargaSatuan = $barang[$namaBarang];

    $totalSebelumPajak = $hargaSatuan * $jumlahBeli;

    // Diskon 5% jika beli lebih dari 3
    $diskon = 0;
    if ($jumlahBeli > 3) {
        $diskon = $totalSebelumPajak * 0.05;
    }

    $setelahDiskon = $totalSebelumPajak - $diskon;

    $pajak = $setelahDiskon * PAJAK;
    $totalBayar = $setelahDiskon + $pajak;

    $hasil = "
        <p>Nama Barang: <span class='bold'>$namaBarang</span></p>
        <p>Harga Satuan: Rp " . number_format($hargaSatuan, 0, ',', '.') . "</p>
        <p>Jumlah Beli: $jumlahBeli</p>
        <p>Total Harga: Rp " . number_format($totalSebelumPajak, 0, ',', '.') . "</p>
        <p>Diskon (5% jika beli >3): Rp " . number_format($diskon, 0, ',', '.') . "</p>
        <p>Setelah Diskon: Rp " . number_format($setelahDiskon, 0, ',', '.') . "</p>
        <p>Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "</p>
        <p class='bold'>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</p>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            max-width: 600px;
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
        form {
            margin-bottom: 20px;
        }
        select, input[type="number"] {
            padding: 8px;
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perhitungan Total Pembelian</h2>
        <form method="post">
            <label for="nama_barang">Pilih Barang:</label>
            <select name="nama_barang" id="nama_barang" required>
                <?php
                foreach ($barang as $nama => $harga) {
                    echo "<option value='$nama'>$nama (Rp " . number_format($harga, 0, ',', '.') . ")</option>";
                }
                ?>
            </select>

            <label for="jumlah">Jumlah Beli:</label>
            <input type="number" name="jumlah" min="1" required>

            <button type="submit">Hitung Total</button>
        </form>

        <?= $hasil ?>
    </div>
</body>
</html>