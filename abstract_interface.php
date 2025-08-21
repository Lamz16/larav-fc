<?php

abstract class Employee
{
    abstract protected function getCountEmployee();
}

class Manager extends Employee
{

    public function getCountEmployee() {
        return 100;
    }
}


$manager1 = new Manager();
echo $manager1 -> getCountEmployee();


interface President{
    public function getCountPresident();
}

class IndoPresident implements President{
    public function getCountPresident()
    {
        return 1;
    }
}

$indoPresident = new IndoPresident();
echo PHP_EOL . $indoPresident -> getCountPresident();