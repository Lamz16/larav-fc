<?php


// indexed array

$buah = ['apel', 'jeruk', 'mangga'];

//add data
$buah[] = 'Anggur';

foreach($buah as $b){
    echo "$b ";
}

unset($buah[1]);

foreach($buah as $b){
    echo "\n $b ";
}



// array dengan key value

$umur = [
    'Andi' => 23,
    'Yasin' => 17,
    'Erna' => 40
];

echo $umur['Andi'];