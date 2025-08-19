<?php

$jarak = '25 kilometer';
$nilai = '25.31';
$nilai2 = 2;
$nilai3 = true;

// do cast

$jarak = (float) $jarak;
$nilai = (float) $nilai;
$nilai2 = (string) $nilai2;
$nilai3 = (integer) $nilai3;

var_dump($jarak, $nilai, $nilai2, $nilai3);