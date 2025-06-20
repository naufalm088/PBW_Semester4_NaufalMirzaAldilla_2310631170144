<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas After UTS - Naufal Mirza Aldilla</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #1e2a38, #2e3e4f);
            color: #fff;
        }

        header {
            background-color: #14213d;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .profile {
            background-color: #324a5e;
            padding: 15px;
            text-align: center;
            margin: 20px auto;
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
        }

        .profile p {
            margin: 6px 0;
            font-weight: bold;
        }

        .intro {
            text-align: center;
            margin: 10px auto 30px;
            max-width: 700px;
            padding: 0 15px;
        }

        .intro p {
            font-size: 1.1rem;
        }

        .card {
            background-color: #ffffff;
            color: #333;
            margin: 20px auto;
            padding: 20px;
            border-radius: 12px;
            max-width: 700px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card h2 {
            color: #14213d;
        }

        .button-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .btn-soal {
            text-decoration: none;
            padding: 10px 18px;
            background-color: #14213d;
            color: #fff;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-soal:hover {
            background-color: #1f2f49;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 40px;
            padding: 20px;
            background-color: #1a1a2e;
            color: #ccc;
        }
    </style>
</head>
<body>

<header>
    <h1><i class="fas fa-graduation-cap"></i> Tugas After UTS</h1>
</header>

<section class="profile">
    <p><i class="fa-solid fa-user"></i> Naufal Mirza Aldilla</p>
    <p><i class="fa-solid fa-id-badge"></i> NPM: 2310631170144</p>
    <p><i class="fa-solid fa-school"></i> Kelas: 4F</p>
</section>

<section class="intro">
    <p>Selamat datang di halaman tugas After UTS! Halaman ini berisi rekap semua tugas dari pertemuan setalah UTS.</p>
</section>

<section class="card">
    <h2><i class="fa-solid fa-chalkboard-user"></i> Pertemuan 6</h2>
    <div class="button-group">
        <a href="pertemuan6/total_pembelian.php" class="btn-soal"><i class="fa-solid fa-file-code"></i> Soal 1</a>
    </div>
</section>

<section class="card">
    <h2><i class="fa-solid fa-chalkboard-user"></i> Pertemuan 7</h2>
    <div class="button-group">
        <a href="pertemuan7/soal1.php" class="btn-soal"><i class="fa-solid fa-file-code"></i> Soal 1</a>
        <a href="pertemuan7/soal2.php" class="btn-soal"><i class="fa-solid fa-file-code"></i> Soal 2</a>
        <a href="pertemuan7/soal3.php" class="btn-soal"><i class="fa-solid fa-file-code"></i> Soal 3</a>
        <a href="pertemuan7/soal4.php" class="btn-soal"><i class="fa-solid fa-file-code"></i> Soal 4</a>
    </div>
</section>

<section class="card">
    <h2><i class="fa-solid fa-chalkboard-user"></i> Pertemuan 8</h2>
    <div class="button-group">
        <a href="pertemuan8/latihan_nilai.php" class="btn-soal"><i class="fa-solid fa-file-code"></i> Soal 1</a>
        <a href="pertemuan8/diskon_ukt.php" class="btn-soal"><i class="fa-solid fa-file-code"></i> Soal 2</a>
    </div>
</section>

<section class="card">
    <h2><i class="fa-solid fa-chalkboard-user"></i> Pertemuan 9</h2>
    <div class="button-group">
        <a href="pertemuan9" class="btn-soal"><i class="fa-solid fa-file-code"></i> Toko Buku Online</a>
    </div>
</section>

<section class="card">
    <h2><i class="fa-solid fa-chalkboard-user"></i> Pertemuan 10</h2>
    <div class="button-group">
        <a href="pertemuan10" class="btn-soal"><i class="fa-solid fa-file-code"></i> Toko Buku Online & Login</a>
    </div>
</section>

<footer>
    &copy; 2025 Naufal Mirza Aldilla
</footer>

</body>
</html>
