<?php

class Utility{

    public static $value = 0;
    public static function addValue(){
        self::$value++;
    }
}

Utility::addValue();

echo Utility::$value;