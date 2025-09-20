<?php
// seison start adalah sebuag fungsi bawaan php untuk memulai sesi bahwa kali ini server akan mengingat aktifitas yang di lakukan oleh si user
// jadi misal user login di halaman loggin.php maka server akan mengingat bahwa user ini sudah login
// dalam hal ini kita akan menyimpan data username dan password yang di kirim dari form loggin.php

session_start();

// disini kita akan menyimpan data username dan password yang di kirim dari form loggin.php
// data yang di kirim dari form loggin.php akan di tangkap oleh super global $_POST
// super global adalah variabel bawaan php yang bisa di akses di mana saja
//$_sessiobn adalah variabel super global yang di gunakan untuk menyimpan data sesi
// jadi data yang di simpan di $_SESSION ini akan di ingat oleh server selama sesi

$_SESSION['username'] =  $_POST['username'];
$_SESSION['password'] =  $_POST['password'];


if (isset($_SESSION['username']) and isset($_SESSION['password'])){
    echo "selamat datang " .$_SESSION['username'];
    echo "<a href='logout.php'> logout </a>"; // ini buat link ke halaman logout.php

}else {
    echo "anda belum loggin dan moohon untuk logginn terlebih dahulu";
}
