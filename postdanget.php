<?php

// if( isset($_GET["nama"])){
    
    
    
//     // jadi dengan adanya get ini kita bisa menerima request dari user ke serverkita
//     // misal user mengakses halaman kita dengan url : localhost/php_bintang/postdanget.php?nama=bintang
//     // maka kita bisa menangkap request nama dengan cara $_GET["nama"] dan get itu bisa kita isi dengan key yang bisa kita tentukan sendiri
    
//     $namaMahasiswa = $_GET["nama"];
    
//     echo "nama mahasiswa adalah : $namaMahasiswa";
// }

if( isset($_POST["nama"])){
    
    
    
    // jadi dengan adanya get ini kita bisa menerima request dari user ke serverkita
    // misal user mengakses halaman kita dengan url : localhost/php_bintang/postdanget.php?nama=bintang
    // maka kita bisa menangkap request nama dengan cara $_GET["nama"] dan get itu bisa kita isi dengan key yang bisa kita tentukan sendiri
    
    $namaMahasiswa = $_POST["nama"];
    
    echo "nama mahasiswa adalah : $namaMahasiswa";
}
?>

<form action="postdanget.php" method="post">  <!-- // method bisa diisi get atau post -->
     namaMahasiswa : <input type="text" name="nama" />  <!-- // usaakan nama ini sama dengan key yang kita tangkap di $_GET["nama"] -->
    <input type="submit"  />
</form>
 