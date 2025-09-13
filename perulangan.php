<?php

$level = 0;
$levelmaks = 15;

$umur = 0;
$umurmax = 15;

echo "menggunakan for <br>";
for ($level; $level <= $levelmaks ; $level++) { 
    echo "level saat ini adalah $level <br>";
}


echo "<br>menggunakan while <br>";
while($umur <= $umurmax){
    echo "umur  saat ini adalah $umur <br>";
    $umur = $umur + 1;
    // $umur++; ini sama dengan diatas $umur = $umur + 1 
}