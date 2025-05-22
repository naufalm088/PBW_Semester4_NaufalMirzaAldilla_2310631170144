<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Praktikum PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f7f9fc;
            margin: 40px;
            color: #333;
        }
        .nav {
            margin-bottom: 20px;
        }
        .nav a {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border-radius: 6px;
            margin-right: 10px;
        }
        .nav a:hover {
            background-color: #0056b3;
        }
        .content {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 3px 8px rgba(0,0,0,0.1);
            max-width: 600px;
        }
        h1 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Latihan Praktikum PHP</h1>
    <div class="nav">
        <a href="?page=soal1">Soal 1</a>
        <a href="?page=soal2">Soal 2</a>
        <a href="?page=soal3">Soal 3</a>
        <a href="?page=soal4">Soal 4</a>
    </div>

    <div class="content">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : '';

        switch ($page) {
            case 'soal1':
                include 'soal1.php';
                break;
            case 'soal2':
                include 'soal2.php';
                break;
            case 'soal3':
                include 'soal3.php';
                break;
            case 'soal4':
                include 'soal4.php';
                break;
            default:
                echo "<p>Silakan klik soal di atas untuk melihat isi program.</p>";
        }
        ?>
    </div>
</body>
</html>
