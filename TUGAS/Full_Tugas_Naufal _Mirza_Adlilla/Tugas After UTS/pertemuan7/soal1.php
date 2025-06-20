<?php
$jumlah_roda = 2;

echo "Jumlah roda: $jumlah_roda<br>";

switch ($jumlah_roda) {
    case 2:
        echo "Jenis kendaraan: Sepeda motor atau sepeda<br>";
        break;
    case 3:
        echo "Jenis kendaraan: Bajaj atau becak<br>";
        break;
    case 4:
        echo "Jenis kendaraan: Mobil<br>";
        break;
    default:
        echo "Jenis kendaraan tidak diketahui<br>";
}
?>
