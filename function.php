<?php

function sayHello($name){
    echo "Hello $name" .PHP_EOL;
}

function sayHelloWithDefaultArg($firstName = 'Anonymous', $lastName = 'Lastname'){
    echo $firstName . ' ' . $lastName;
}

//dengan tipe data yang harus sama
function staticDataType(int $a, int $b){
    echo PHP_EOL. $a + $b;
}

function sumAll(...$value){
    $total = 0;
    foreach ($value as $a) {
        $total += $a;
    };
    return $total;
}

sayHello('Andi');
sayHelloWithDefaultArg();
staticDataType(5,5);
staticDataType("100", "90");

$result = sumAll(1,2,3,4,5);
echo PHP_EOL. $result;