<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Mahasiswa</title>
</head>
<body>
    <h2>Input Nilai Mahasiswa</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br><br>
        Nilai: <input type="number" name="nilai"><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = (int) $_POST['nilai'];

        if ($nilai >= 85 && $nilai <= 100) {
            $predikat = "A";
        } elseif ($nilai >= 75) {
            $predikat = "B";
        } elseif ($nilai >= 65) {
            $predikat = "C";
        } elseif ($nilai >= 50) {
            $predikat = "D";
        } elseif ($nilai >= 0) {
            $predikat = "E";
        } else {
            $predikat = "Tidak valid";
        }

        echo "<hr>";
        echo "<h3>Hasil Penilaian:</h3>";
        echo "Nama: <b>$nama</b><br>";
        echo "Nilai: <b>$nilai</b><br>";
        echo "Predikat: <b>$predikat</b>";
    }
    ?>
</body>
</html>
