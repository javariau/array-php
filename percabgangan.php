<?php

$heroml = "hanzo";
$level = 1;

switch ($level) {
    case 10:
     echo  "hero  $heroml sudah memiliki ultimate";
        # code...
        break;
    case 4:
        echo  "hero $heroml belum memiliki ultimate";
        break;
    
    default:
        echo  "hero $heroml fsociety";
        break;
}

// if ($level <=3){
//     echo  "hero  $heroml blm memiliki ultimate";
// }else if($level >=4){
//     echo  "hero $heroml sudah memiliki ultimate";
// }else{
//     echo  "hero $heroml belum memiliki ultimate";
// }