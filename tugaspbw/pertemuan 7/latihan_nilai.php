<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>
    <h2>Form Input Nilai Mahasiswa</h2>
    
    <form method="post" action="">
        Nama: <input type="text" name="nama"><br><br>
        Nilai: <input type="number" name="nilai"><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $nilai = $_POST["nilai"];

        // Validasi input
        if ($nilai >= 0 && $nilai <= 100) {
            // Menentukan predikat
            if ($nilai >= 85) {
                $predikat = "A";
            } elseif ($nilai >= 75) {
                $predikat = "B";
            } elseif ($nilai >= 65) {
                $predikat = "C";
            } elseif ($nilai >= 50) {
                $predikat = "D";
            } else {
                $predikat = "E";
            }

            // Menentukan status lulus/tidak
            $status = ($nilai >= 65) ? "Lulus" : "Tidak Lulus";

            // Menampilkan hasil
            echo "<hr>";
            echo "<h3>Hasil:</h3>";
            echo "Nama: $nama <br>";
            echo "Nilai: $nilai <br>";
            echo "Predikat: $predikat <br>";
            echo "Status: $status <br>";
        } else {
            echo "<hr>";
            echo "<p><strong>Nilai tidak valid! Masukkan nilai antara 0 hingga 100.</strong></p>";
        }
    }
    ?>
</body>
</html>