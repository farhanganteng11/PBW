function cekNilai() {
    let nim = document.getElementById("nim").value;
    let nilaiInput = document.getElementById("nilai").value;
    let nilai = parseInt(nilaiInput);

    let hasilnim = document.getElementById("hasil-nim");
    let hasilNilai = document.getElementById("hasil-nilai");
    let hasilHurufMutu = document.getElementById("hasil-hurufmutu");

    // Validasi input NIM
    if (nim.trim() === "") {
        hasilnim.innerText = "NIM tidak boleh kosong!";
        hasilnim.style.color = "red";
        hasilNilai.innerText = "";
        hasilHurufMutu.innerText = "";
        return;
    }

    // Validasi nilai
    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasilnim.innerText = "Nilai tidak valid!";
        hasilnim.style.color = "red";
        hasilNilai.innerText = "";
        hasilHurufMutu.innerText = "";
        return;
    }

    // Menentukan huruf mutu
    let hurufMutu = "";
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    // Tampilkan hasil
    hasilnim.style.color = "black";
    hasilnim.innerText = `NIM: ${nim}`;
    hasilNilai.innerText = `Nilai: ${nilai}`;
    hasilHurufMutu.innerText = `Huruf Mutu: ${hurufMutu}`;
}
