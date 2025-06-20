alert('heyo wasap gengs') //munculnya di notif
console.log('ini console') //munculnya di console

const usia = 20
let y = 2
console.log('umur gue' + usia)

function salam() {
    alert("Selamat datang di website kami!");
}  

function contohLet() {
    let y = 10;
    if (true) {
        let y = 20;
        console.log("Nilai dalam blok:", y);
    }
    console.log("Nilai luar blok:", y);
 }
 contohLet();
 const z = 100;
z = 200; // Akan menyebabkan error

let nama = "Budi"; // String
let umur = 30; // Number
let isStudent = false; // Boolean
let buah = ["Apel", "Mangga", "Jeruk"]; // Array
let mahasiswa = { nama: "Rina", usia: 20, jurusan: "Informatika" }; // Object


console.log(nama);  // Output: Budi
console.log(buah[1]); // Output: Mangga
console.log(mahasiswa.jurusan); // Output: Informatika