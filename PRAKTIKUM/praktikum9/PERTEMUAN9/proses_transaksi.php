<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pelanggan = trim($_POST['nama_pelanggan']);
    $buku = $_POST['buku'];

    // Cek jika nama pelanggan kosong
    if (empty($nama_pelanggan)) {
        header("Location: buat_pesanan.php?message=Nama pelanggan tidak boleh kosong.");
        exit;
    }

    // Cek apakah pelanggan sudah ada
    $stmt = $conn->prepare("SELECT ID FROM Pelanggan WHERE Nama = ?");
    $stmt->bind_param("s", $nama_pelanggan);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Pelanggan sudah ada
        $row = $result->fetch_assoc();
        $pelanggan_id = $row['ID'];
    } else {
        // Tambah pelanggan baru
        $stmt = $conn->prepare("INSERT INTO Pelanggan (Nama) VALUES (?)");
        $stmt->bind_param("s", $nama_pelanggan);
        $stmt->execute();
        $pelanggan_id = $stmt->insert_id;
    }

    // Tanggal pesanan hari ini
    $tanggal_pesanan = date('Y-m-d');

    // Dummy total harga awal
    $total_harga = 0;

    // Buat pesanan
    $stmt = $conn->prepare("INSERT INTO Pesanan (Pelanggan_ID, Tanggal_Pesanan, Total_Harga) VALUES (?, ?, ?)");
    $stmt->bind_param("isd", $pelanggan_id, $tanggal_pesanan, $total_harga);
    $stmt->execute();
    $pesanan_id = $stmt->insert_id;

    // Simpan detail buku
    foreach ($buku as $item) {
        $buku_id = $item['id'];
        $kuantitas = $item['kuantitas'];

        // Ambil harga buku
        $stmt = $conn->prepare("SELECT Harga FROM Buku WHERE ID = ?");
        $stmt->bind_param("i", $buku_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $harga = 0;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $harga = $row['Harga'];
        }

        $subtotal = $harga * $kuantitas;
        $total_harga += $subtotal;

        // Simpan ke detail pesanan
        $stmt = $conn->prepare("INSERT INTO Pesanan_Detail (Pesanan_ID, Buku_ID, Kuantitas, Harga) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiid", $pesanan_id, $buku_id, $kuantitas, $harga);
        $stmt->execute();
    }

    // Update total harga
    $stmt = $conn->prepare("UPDATE Pesanan SET Total_Harga = ? WHERE ID = ?");
    $stmt->bind_param("di", $total_harga, $pesanan_id);
    $stmt->execute();

    // Redirect ke halaman lihat transaksi
    header("Location: lihat_transaksi.php?message=Pesanan berhasil ditambahkan.");
    exit;
}
?>
