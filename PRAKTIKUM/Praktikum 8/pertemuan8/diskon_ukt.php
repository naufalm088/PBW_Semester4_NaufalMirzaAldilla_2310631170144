<?php
// Cek apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = strtoupper($_POST["nama"]);
    $prodi = $_POST["prodi"];
    $semester = (int) $_POST["semester"];
    $ukt = (int) $_POST["ukt"];

    // Tentukan diskon
    if ($ukt >= 5000000 && $semester > 8) {
        $diskonPersen = 15;
    } elseif ($ukt >= 5000000) {
        $diskonPersen = 10;
    } else {
        $diskonPersen = 0;
    }

    $diskonRupiah = $ukt * ($diskonPersen / 100);
    $totalBayar = $ukt - $diskonRupiah;

    // Tampilkan hasil
    echo "<hr>";
    echo "<h3>Output Diskon Mahasiswa</h3>";
    echo "<table>";
    echo "<tr><td><b>NPM</b></td><td>: $npm</td></tr>";
    echo "<tr><td><b>NAMA</b></td><td>: $nama</td></tr>";
    echo "<tr><td><b>PRODI</b></td><td>: $prodi</td></tr>";
    echo "<tr><td><b>SEMESTER</b></td><td>: $semester</td></tr>";
    echo "<tr><td><b>BIAYA UKT</b></td><td>: Rp. " . number_format($ukt, 0, ',', '.') . "</td></tr>";
    echo "<tr><td><b>DISKON</b></td><td>: $diskonPersen%</td></tr>";
    echo "<tr><td><b>YANG HARUS DIBAYAR</b></td><td>: Rp. " . number_format($totalBayar, 0, ',', '.') . "</td></tr>";
    echo "</table>";
}
?>

<!-- Form Input -->
<h2>Form Diskon UKT Mahasiswa</h2>
<form method="post">
    NPM: <input type="text" name="npm" required><br><br>
    Nama: <input type="text" name="nama" required><br><br>
    Prodi: <input type="text" name="prodi" required><br><br>
    Semester: <input type="number" name="semester" required><br><br>
    Biaya UKT (Rp): <input type="number" name="ukt" required><br><br>
    <input type="submit" value="Proses">
</form>
