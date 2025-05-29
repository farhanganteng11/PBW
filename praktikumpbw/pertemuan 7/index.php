<!DOCTYPE html>
<html>
<head>
    <title>Form dan Proses PHP</title>
</head>
<body>

<form action="" method="post">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Kirim">
</form>

<?php
// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $var_nama = $_POST['nama'];
    $var_email = $_POST['email'];

    // Validasi input
    if (!empty($var_nama)) {
        echo "Nama: " . htmlspecialchars($var_nama) . "<br>";
    } else {
        echo "Nama tidak boleh kosong!<br>";
    }

    echo "Email: " . htmlspecialchars($var_email) . "<br>";

    // Contoh nilai dan percabangan
    $nilai = 75;
    if ($nilai >= 80) {
        echo "Nilai A<br>";
    } elseif ($nilai >= 70) {
        echo "Nilai B<br>";
    } else {
        echo "Nilai C<br>";
    }

    // Contoh logika usia dan KTP
    $umur = 20;
    $ktp = true;
    if ($umur >= 17 && $ktp) {
        echo "Boleh memilih<br>";
    }
}

// Jika pakai method GET
if (!empty($_GET['nama'])) {
    echo "Nama dari URL (GET): " . htmlspecialchars($_GET['nama']) . "<br>";
}
?>
</body>
</html>
