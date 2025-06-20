<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    header("Location: login.php?message=" . urlencode("Berhasil logout"));
    exit;
} else {
    // Mencegah akses langsung
    header("Location: index.php");
    exit;
}
