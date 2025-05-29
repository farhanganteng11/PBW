<?php
// Switch
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari pertama kerja!<br>";
        break;

    case "jum'at":
        echo "Solat Jum'at!<br>";
        break;

    case "Minggu":
        echo "Libur akhir pekan!<br>";
        break;

    default:
        echo "Hari biasa.<br>";
}

// Perulangan for
for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-" .$i."<br>";
}

// Array buah dan perulangan
$buah = ["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
    echo $buah[$i]. "<br>";
}

// Perulangan while
$nilai = 1;
while ($nilai <= 5) {
    echo "Nilai: ".$nilai."<br>";
    $nilai++;
}

// Perulangan foreach
$mahasiswa = [ 
    "10001" => "Andi",
    "10002" => "Budi",
    "10003" => "Citra"
];

foreach($mahasiswa as $nim => $nama) {
    echo "NIM: ".$nim .", Nama: ".$nama. "<br>";
}

// Operator ternary
$umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";
echo "Status: " . $status . "<br>";
?>