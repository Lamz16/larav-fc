<?php

// $nilai = 78;

/* if($nilai >= 80){
    echo "Nilai A";
}else if ($nilai >= 60){
    echo "Nilai B";
} else if ($nilai >= 40){
    echo "Nilai C";
} else {
    echo "Nilai D";
} */


    $day = 5;

    switch($day){
        case 1: 
            echo "Senin";
            break;
        case 2:
            echo "Selasa";
            break;
        case 3:
            echo "Rabu";
            break;
        case 4:
            echo "Kamis";
            break;
        case 5:
            echo "Jum'at";
            break;
        case 6:
            echo "Sabtu";
            break;
        case 7:
            echo "Minggu";
            break;
        default:
            echo "Its not day";
            break;
    }