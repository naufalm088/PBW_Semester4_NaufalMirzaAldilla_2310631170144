<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Silakan login terlebih dahulu"));
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Yakin ingin logout?</h2>
    <form method="post" action="logout.php">
        <button type="submit" class="btn btn-danger">Logout</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>
