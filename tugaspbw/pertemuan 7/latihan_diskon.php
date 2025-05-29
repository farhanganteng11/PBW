<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>
    <h2>Form Pembayaran UKT Mahasiswa</h2>

    <form method="post" action="">
        NPM: <input type="text" name="npm"><br><br>
        Nama: <input type="text" name="nama"><br><br>
        Prodi: <input type="text" name="prodi"><br><br>
        Semester: <input type="number" name="semester"><br><br>
        Biaya UKT (Rp): <input type="number" name="ukt"><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST["npm"];
        $nama = $_POST["nama"];
        $prodi = $_POST["prodi"];
        $semester = $_POST["semester"];
        $ukt = $_POST["ukt"];

        // Hitung diskon
        $diskon = 0;
        if ($ukt >= 5000000 && $semester > 8) {
            $diskon = 0.15; // 15%
        } elseif ($ukt >= 5000000) {
            $diskon = 0.10; // 10%
        }

        $jumlah_diskon = $ukt * $diskon;
        $bayar = $ukt - $jumlah_diskon;
        $persen_diskon = $diskon * 100;

        // Format angka ke rupiah
        function rupiah($angka) {
            return "Rp. " . number_format($angka, 0, ',', '.') . ",-";
        }

        // Tampilkan hasil
        echo "<hr>";
        echo "<h3>Hasil Pembayaran</h3>";
        echo "NPM: $npm <br>";
        echo "NAMA: $nama <br>";
        echo "PRODI: $prodi <br>";
        echo "SEMESTER: $semester <br>";
        echo "BIAYA UKT: " . rupiah($ukt) . "<br>";
        echo "DISKON: " . ($diskon > 0 ? "$persen_diskon%" : "0%") . "<br>";
        echo "YANG HARUS DIBAYAR: " . rupiah($bayar) . "<br>";
    }
    ?>
</body>
</html>