<?php
$nama = array("bintang","joko","ani","susi"); // bisa juga pake  ["bintang","joko","ani","susi"] ini sama aja cuma bedanya ini gak pake kurung bisasa dan tulisan array
echo $nama[0]; // ini buat nampilin array ke 0
echo "<br>";

var_dump($nama); // ini buat nampilin semua isi array
echo "<br>";


$mahasiswa = [
    // nama ,umur,alamat ini namanya key yang fungsinya buat ngasih nama ke array dari variabel $mahasiswa
    "nama" => ["bintang","joko","ani","susi"],
    "umur" => [20,18,19,17],
    "alamat" => ["jakarta","bandung","surabaya","medan"]
];
var_dump($mahasiswa);
echo "<br>";
echo $mahasiswa["nama"][2]; // ini buat nampilin array ke 2 dari array nama