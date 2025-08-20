<?php
class Animal {
    public $name;        // bisa diakses dimana saja
    protected $color;    // hanya di class ini & subclass (class turunan)
    private $age;        // hanya di class ini

    public function __construct($name, $color, $age) {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    // Public method
    public function sayHi() {
        echo "Hi, I am {$this->name} with {$this->color} color.";
    }

    // Protected method
    protected function showColor() {
        return "My color is {$this->color}";
    }

    // Private method
    private function showAge() {
        return "I am {$this->age} years old.";
    }

    // Method untuk akses private dari dalam class
    public function getAgeInfo() {
        return $this->showAge();
    }
}

class Bird extends Animal {
    public function birdInfo() {
        // Bisa akses protected (OK)
        echo $this->showColor();

        // Tidak bisa akses private -> Error
        // echo $this->showAge();
    }
}

// ---- Penggunaan ----
$cat = new Animal("Kitty", "Black", 3);

// Public bisa dipanggil
echo $cat->name;       // OK
$cat->sayHi();         // OK

// Protected tidak bisa di luar class
// echo $cat->color;   // ERROR

// Private tidak bisa di luar class
// echo $cat->age;     // ERROR

// Cara benar: akses private lewat public method
echo $cat->getAgeInfo(); // OK → "I am 3 years old."

$parrot = new Bird("Parrot", "Green", 2);
$parrot->birdInfo();   // Bisa akses protected
