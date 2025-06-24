<?php
    session_start();
    if (!isset($_SESSION['login_Un51k4'])) {
        header("Location: login.php?message=" . urlencode("Untuk mengakses fitur anda harus login."));
    exit;
    }
?>

<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id      = $_POST['id'];
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun   = $_POST['tahun_terbit'];
    $harga   = $_POST['harga'];
    $stok    = $_POST['stok'];

    // Siapkan query update
    $stmt = $conn->prepare("
        UPDATE Buku 
        SET Judul = ?, Penulis = ?, Tahun_Terbit = ?, Harga = ?, stok = ? 
        WHERE ID = ?
    ");
    $stmt->bind_param("ssiiii", $judul, $penulis, $tahun, $harga, $stok, $id);

    // Eksekusi dan beri respon
    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil diperbarui'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data'); window.location='index.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>