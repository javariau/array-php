<?php

// Literasi Data Array disini kita akan menggabungkan array dengan looping agar lebih mudah di baca dan di pahami dan juga mendapatkan nilai
// yang dalam array tersebut tanpa harus menuliskan satu persatu

$namaMahasiswa = [
    "nama" => ["bintang","joko","ani","susi"],
    "umur" => [20,18,19,17],
    "alamat" => ["jakarta","bandung","surabaya","medan"]
];

// disini kita bisa menggunakan iterasi bernama foreach supaya kita nggak perlu menuliskan satu persatu
foreach($namaMahasiswa as $key => $value){
    foreach ($value as  $val) {
        echo $val;
        echo "<br>";  
    }
    echo "<br>";

}
