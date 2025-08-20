<?php

class Animal
{
    public $name;
    public $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHi()
    {
        echo "Hi iam {$this->name}";
        echo PHP_EOL . "My color is {$this->color}";
    }
}

class Bird extends Animal
{
    public function fly()
    {
        echo PHP_EOL . "{$this->name} is flying!";
    }
}

$cat = new Animal('Kucing', 'Oren');
$cat -> sayHi();

echo PHP_EOL;

$bird = new Bird("Kakaktua", "Putih");
$bird -> sayHi();
$bird -> fly();