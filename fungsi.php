<?php
// disini kita akan belajar tentang fungsi pada php
// fungsi adalah sebuah blok kode yang di desain untuk melakukan tugas tertentu inputnya biasa di sebut parameter dan outputnya biasa di sebut return
function luasSegitiga($alas, $tinggi) {
    // disni kita akan menghitung luas segitiga atau mengeksekusi kode nya 
    // pertama kita akan membuat rumus luas segitiga
    // rumus luas segitiga adalah 1/2 * alas * tinggi

    $luas = 0.5 * $alas * $tinggi; // ini buat ngitung luas segitiga dan sampai sini kita sudah membuat fungsi luas segitiga cuma di sini blm ada outputnya
    return $luas; // ini buat ngasih output ke fungsi luas segitiga

}

// disini kita akan memanggil fungsi luas segitiga

echo "ini adalah hasil dari fungsi luas segitiga <br>";
echo luasSegitiga(10,20); // ini buat manggil fungsi luas segitiga dengan alas 10 dan tinggi 20
echo "<br>";
echo "<br>";



// gimana kalau function nya perlu lebih dari 3 atu 5 atau 10 parameter dan kita tidak mau ribet ngetik satu satu serta kalau kita gak tau  perlu
// berapa parameter yang di butuhkan oleh function tersebut

function sum (...$input){ //kalau kita gak tau berapa parameter yang di butuhkan kita bisa pake ...$input artinya fucntion sum ini akan 
    //menjumlahkan semua input yang di berikan
    // karena function sum ini akan menjumlahkan semua iputannya kita harus membuat penjumlahan yang menjumlahkan semua inputan nya

    //untuk menjumlahkannya kita perlu variable baru bernama
    $result = 0; // ini buat nampung hasil penjumlahan

    foreach ($input as $value) {
        // lalu kita lanjutkan ke iterasi 

        // $result += $value; // ini buat menjumlahkan semua inputan bisa gini penulisannya
        $result = $result + $value; // ini buat menjumlahkan semua inputan bisa gini penulisannya
    }

    // lalu kita kembalikan hasil penjumlahan nya
    return $result;
    
}

echo "ini adalah hasil dari function sum <br>";
echo sum(1,2,3,4,5,6,7,8,9,10); // ini buat manggil function sum dengan inputan 1 sampai 10 dan menhitung hasilnya dan hasilnya yaitu 10+9+8+7+6+5+4+3+2+1 = 55
echo "<br>";