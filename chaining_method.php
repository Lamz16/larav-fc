<?php

class User {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
        return $this; // kembalikan objek ini
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this; // kembalikan objek ini
    }

    public function getInfo() {
        return "Name: {$this->name}, Email: {$this->email}";
    }
}

// Tanpa chaining
$user = new User();
$user->setName("Andi");
$user->setEmail("andi@mail.com");

echo $user->getInfo();

echo PHP_EOL. '====================' .PHP_EOL;
// Dengan Chaining

echo $user->setName("Andi")
          ->setEmail("andi@mail.com")
          ->getInfo();