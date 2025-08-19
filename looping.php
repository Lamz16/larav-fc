<?php

// Perulangan for
for($i=0; $i < 5; $i++){
    print_r($i);
}

echo "\n ================= \n";
// perulangan while
$i = 0;
while ($i < 5){
    print_r($i);
    $i++;
}

echo "\n ================= \n";
//perulangan do-while
$o = 0;
do {
    print_r($o);
    $o++;
} while ($o < 5);


echo "\n ================= \n";
// perulangan forearch
$buah = ["apel", "jeruk", "pisang"];
foreach ($buah as $b) {
    echo "$b <br>";
}