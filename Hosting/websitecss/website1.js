//alert('Hai guys please sigh up'); //menambahkan kalimat pop up sebelum memasuki website
/*
console.log('Nama saya Muhammad Rangga'); //memasukkan tipe data string pada console js

var Umur1 = 19;
var Umur2 = 18;
//contoh pemjumlahan umur saya dan andi yang akan di tampilkan ke console
console.log('Umur saya ' + Umur1);
console.log('Umur andi ' + Umur2);

var hasil = Umur1 + Umur2;
console.log('umur saya dan andi jika di jumlahkan adalah ' + hasil);
*/

//pop up box terdiri dari alert, prompt, dan confirm

//prompt mengembalikan nilai yang di tuliskan ke texbox
// contoh penulisan prompt. prompt('tuliskan nama anda:');

//contoh prompt yang mengembalikan nilai adalah dengan cara memasukkan ke dalam variabel (nama)

/*
var nama = prompt('Tolong masukkan nama anda:');
alert('Terima kasih sudah bergabung :) \n ' + nama);
*/

//confirm di gunakkan untuk meminta konfirmasi ke user confirm mengembalikan nilai boolean (yes or true)
// contoh penulisan confirm. confirm('apa kamu yakin');

//confirm biasanya di gunakan saat pengkondisian dan pengulangan
//contoh confim yang mengembalikan nilai adalah dengan cara memasukkan ke dalam variabel (login)

/*
var login = confirm('ingin melanjutkan?');
alert(login);
*/

//contoh pengulangan

/*
var pengulangan = true;

while (pengulangan) {
  var nama = prompt('Tolong masukkan nama anda');
  var umur = prompt('Tolong masukkan umur anda');
  console.log('Nama user = ' + nama);
  console.log('Umur user = ' + umur);

  alert('Terima kasih sudah bergabung :) ' + nama);

  pengulangan = confirm('ingin mencoba lagi?'); //batas pengembalian nilai boolean
}

*/

/*penjelasan kodingan di atas 
variabel penglangan bernilai benar 
selama pengulangan benar maka pengulangan tidak akan berhenti.
prompt masukkan nama (nama pada prompt mengembalikan nilai)
alert Hai di tambah (variabel nama yang tadi di tuliskan)
memanggil dan memasukkan nilai variabel pengulangan ke confirm. ingin mencoba lagi? di tambah (variabel nama yang tadi di tuliskan) jika ok maka nilai variabel pengulangan tetap (TRUE) maka pengulangan di lanjutkan. jika cencel maka nilai variabel pengulangan berubah menjadi (FALSE) maka pengulangan tidak di lanjutkan.

jika pengulangan di lanjutkan alert terima kasih sudah bergabung di tambah (variabel nama yang tadi di tuliskan) */

//CONTROL FLOW (mengatur alur program)
/* maka yang di utuhkan adalah pengulangan(loop) dan pengkondisian (percabangan) */

//Latihan
/*
var Angkot = 1;
while (Angkot <= 10) {
  console.log('Angkot No. ' + Angkot + ' Berjalan dengan baik');
  Angkot++;
}
*/

/*Angkot 2

var jumlahangkot = 10;
var Angkotberoprasi = 6;
*/
// var Noangkot = 1;
/* penggunaan while dan for
while (Noangkot <= Angkotberoprasi) {
  console.log('Angkot No. ' + Noangkot + ' Beroprasi dengan baik');

  Noangkot++;
}
for (Noangkot = 7; Noangkot <= jumlahangkot; Noangkot++) {
  console.log('Angkot No. ' + Noangkot + ' Sedang tidak beroprasi');
}
*/
/* penggunaan for dan if else
for (Noangkot = 1; Noangkot <= jumlahangkot; Noangkot++) {
  if (Noangkot <= Angkotberoprasi) {
    console.log('Angkot No. ' + Noangkot + ' Beroprasi dengan baik');
  } else {
    console.log('Angkot No. ' + Noangkot + ' Sedang tidak beroprasi');
  }
}
*/

/* contoh penggunaan for dan else if
for (Noangkot = 1; Noangkot <= jumlahangkot; Noangkot++) {
  if (Noangkot <= Angkotberoprasi) {
    console.log('Angkot No. ' + Noangkot + ' Beroprasi dengan baik');
  } else if (Noangkot == 8) {
    console.log('Angkot No. ' + Noangkot + ' Sedang tidur');
  } else {
    console.log('Angkot No. ' + Noangkot + ' Sedang tidak beroprasi');
  }
}
*/

/* contoh penglangan case 
var nilai = prompt('masukkan nilai yang ingin di jumlahkan!!! \n (contoh 1+1 2+2 3+3 4+4 5+5)');

switch (nilai) {
  case '1+1':
    alert('jawaban dari hasil perhitungan ini adalah 2');
    break;
  case '2+2':
    alert('jawaban dari hasil perhitungan ini adalah 2');
    break;
  case '3+3':
    alert('jawaban dari hasil perhitungan ini adalah 2');
    break;
  case '4+4':
    alert('jawaban dari hasil perhitungan ini adalah 2');
    break;
  case '5+5':
    alert('jawaban dari hasil perhitungan ini adalah 2');
    break;
}
*/

/*
var S = '';

for (var B = 0; B < 7; B++) {
  for (var C = 0; C <= B; C++) {
    S += '*';
  }
  S += '\n';
}
console.log(S);
*/

// game simpel suit jawa

/* var suit = true;

while (suit == true) {
  var p = prompt('pilihan: gajah, semut, orang');

  var com = Math.random();

  if (com < 0.34) {
    com = 'gajah';
  } else if (com >= 0.34 && com < 0.66) {
    com = 'orang';
  } else {
    com = 'semut';
  }

  var hasil = '';

  if (com == p) {
    hasil = 'SERI';
  } else if (p == 'gajah') {
    hasil = com == 'orang' ? 'MENANG' : 'KALAH';
  } else if (p == 'orang') {
    hasil = com == 'gajah' ? 'KALAH' : 'MENANG';
  } else if (p == 'semut') {
    hasil = com == 'orang' ? 'KALAH' : 'MENANG';
  } else {
    hasil = 'anda memasukkan pilihan yang salah !!';
  }

  alert('Anda memilih : ' + p + ' dan komputer memilih : ' + com + ' \n maka hasilnya anda : ' + hasil);

  suit = confirm('ingin melanjutkan permainan ?');
}
alert('terimakasih sudah bermain');
*/
//menjumlahkan volume 2 buah kubus
/*
function MenjumlahkanVolumeKubus(a, b, c) {//parameter
  var volumeA = a * a * a;
  var volumeB = b * b * b;
  var volumeC = c * c * c;
  var total = volumeA + volumeB + volumeC;
  return total; //Saat JavaScript mencapai pernyataan return, fungsi tersebut akan berhenti dijalankan. Jika fungsi dipanggil dari sebuah statement, JavaScript akan kembali (return) untuk mengeksekusi kode setelah statement pemanggilan.
}

console.log(MenjumlahkanVolumeKubus(8, 3, 10)); //memanggil function ((8,3,10)(masuk ke argument) memsaukkan nilai sisi setiap kubus)
//function dapat di jalankan berulang ulang kali
alert(MenjumlahkanVolumeKubus(11, 12, 4));
alert(MenjumlahkanVolumeKubus(10, 9, 3));
alert(MenjumlahkanVolumeKubus(7, 5, 6));
*/
