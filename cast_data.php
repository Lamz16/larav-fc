<?php

$jarak = '25 kilometer';
$nilai = '25.31';

// do cast

$jarak = (float) $jarak;
$nilai = (float) $nilai;

var_dump($jarak, $nilai);