<?php

trait Talk {
    public function sayHello(string $name, string $role){
        echo "Hello everyone i'm $name, as $role" . PHP_EOL;
    }
}

abstract class Employee
{
    abstract protected function getCountEmployee();
}

class Manager extends Employee
{
    use Talk;
    public function getCountEmployee() {
        return 100;
    }
}


$manager1 = new Manager();
$manager1 -> sayHello('Andi', 'Manager');
echo $manager1 -> getCountEmployee();


interface President{
    public function getCountPresident();
}

class IndoPresident implements President{
    public function getCountPresident() : int
    {
        return 1;
    }
}

$indoPresident = new IndoPresident();
echo PHP_EOL . $indoPresident -> getCountPresident();