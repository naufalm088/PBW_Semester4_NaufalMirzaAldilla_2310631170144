function CekNilai() {
    let nim = document.getElementById("nim").value;
    let nilai = parseInt(document.getElementById("nilai").value);
    let hasil = document.getElementById("hasil");
    let hurufMutu;

    // 2. JavaScript untuk event klik tombol
    // 4. Jika nilai di luar rentang 0-100, tampilkan pesan error
    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasil.innerHTML = "Nilai Tidak Valid!";
        return;
    }

    // 3. kondisi if-else untuk menentukan huruf mutu berdasarkan nilai
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

    // 4. Menampilkan hasil NIM dan huruf mutu setelah tombol ditekan
    hasil.innerHTML = `NIM: ${nim} <br> Huruf Mutu: ${hurufMutu}`;
}
