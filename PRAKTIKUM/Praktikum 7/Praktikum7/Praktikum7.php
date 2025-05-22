<?php
// Navigasi
echo '<a href="index.php">Beranda</a> | <a href="about.php">Tentang</a> | <a href="contact.php">Kontak</a><br><br>';

// Include file menu (pastikan file 'menu.php' tersedia di folder yang sama)
echo '<div class="menu">';
if (file_exists('menu.php')) {
    include 'menu.php';
} else {
    echo "File menu.php tidak ditemukan.";
}
echo '</div><br>';

// Percabangan switch
$hari = "Senin";
switch ($hari) {
    case "Senin":
        echo "Hari pertama kerja!<br>";
        break;
    case "jum'at":
        echo "Solat jumat!<br>";
        break;
    case "Minggu":
        echo "Libur akhir pekan!<br>";
        break;
    default:
        echo "Hari biasa.<br>";
}

// Perulangan for
for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-".$i."<br>";
}

// Perulangan for array
$buah = ["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
    echo $buah[$i] . "<br>";
}

// Perulangan while
$nilai = 1;
while ($nilai <= 5) {
    echo "Nilai: " . $nilai . "<br>";
    $nilai++;
}

// Perulangan foreach
$mahasiswa = [
    "10001" => "Andi",
    "10002" => "Budi",
    "10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
    echo "NIM: " . $nim . ", Nama: " . $nama . "<br>";
}

// Operator ternary
$umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";
echo "Status: " . $status . "<br>";

// Include dan require
if (file_exists('nama_file.php')) {
    include 'nama_file.php';
    require 'nama_file.php';
} else {
    echo "File nama_file.php tidak ditemukan.<br>";
}
?>
