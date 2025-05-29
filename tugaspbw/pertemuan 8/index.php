<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Praktikum PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 8px 0;
        }
        a {
            text-decoration: none;
            background: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            display: inline-block;
        }
        a:hover {
            background: #0056b3;
        }
        .output {
            margin-top: 20px;
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <h2>Latihan Praktikum PHP</h2>
    <ul>
        <li><a href="?soal=1">Soal 1: Switch Kendaraan</a></li>
        <li><a href="?soal=2">Soal 2: Cetak Bilangan Genap</a></li>
        <li><a href="?soal=3">Soal 3: Array Hewan</a></li>
        <li><a href="?soal=4">Soal 4: Ternary Genap/Ganjil</a></li>
    </ul>

    <div class="output">
        <?php
        if (isset($_GET['soal'])) {
            $soal = $_GET['soal'];
            if (in_array($soal, ['1', '2', '3', '4'])) {
                include "soal$soal.php";
            } else {
                echo "Soal tidak ditemukan.";
            }
        } else {
            echo "Silakan pilih soal di atas untuk melihat hasilnya.";
        }
        ?>
    </div>

</body>
</html>
