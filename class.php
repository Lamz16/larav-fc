<?php

class Animal{
    public $name;
    public $color;
    public $sound;


    public function getSound(){
        echo PHP_EOL. 'the sound is ' . $this->sound;
    }

    public function getName(){
        echo  "Hi i'am a " . $this->name . " my color is " . $this->color;
    }

}

$cat = new Animal();
$cat -> name = "Kucing";
$cat -> sound = "Meooow";
$cat -> color = "Oren";

$cat -> getName();
$cat -> getSound();
