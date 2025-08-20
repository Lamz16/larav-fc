<?php


class vehicle{

    public $name;

    public function __construct(string $name = 'Anonymous')
    {
        $this -> name = $name;
    }

    public function gas(){
        echo $this ->name . " Gas";
    }

    public function __destruct()
    {
        echo "Object {$this->name} dihancurkan\n";
    }
}


$mercy = new vehicle("Mercedes Benz");
$mercy -> gas();