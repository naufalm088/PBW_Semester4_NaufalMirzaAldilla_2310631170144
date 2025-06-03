<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pemrograman_web_contoh"; // ✅ harus dalam tanda kutip

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
