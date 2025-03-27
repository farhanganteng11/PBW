function cekNilai() {
    let nilai = parseInt(document.getElementById("nilai").value);
    let hasil = "";
    
    if (nilai >= 80 && nilai <= 100) {
        hasil = "Huruf Mutu: A";
    } else if (nilai >= 70 && nilai <= 79) {
        hasil = "Huruf Mutu: B";
    } else if (nilai >= 60 && nilai <= 69) {
        hasil = "Huruf Mutu: C";
    } else if (nilai >= 50 && nilai <= 59) {
        hasil = "Huruf Mutu: D";
    } else if (nilai >= 0 && nilai <= 49) {
        hasil = "Huruf Mutu: E";
    } else {
        hasil = "Nilai tidak valid!";
    }
    
    document.getElementById("hasil").innerText = hasil;
}