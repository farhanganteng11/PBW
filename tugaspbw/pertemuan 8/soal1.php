<?php
$jumlah_roda = 4;

switch ($jumlah_roda) {
    case 2:
        $jenis = "Motor";
        break;
    case 4:
        $jenis = "Mobil";
        break;
    case 6:
        $jenis = "Truk";
        break;
    default:
        $jenis = "Tidak diketahui";
}
echo "Jumlah roda: $jumlah_roda <br>Jenis kendaraan: <strong>$jenis</strong>";
?>
