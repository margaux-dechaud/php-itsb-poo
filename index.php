<?php

class Person {
    private $dog;
    private $firstname;
    private $lastname;

    public function __construct($pFirstname, $pLastname) {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

    public function speak() { }

    public function buy($pDog) {
        $this->dog = $pDog;
    }
}

class Dog {
    private $name;

    public function __construct($pName) {
        $this->name = $pName;
    }
}

$person = new Person("John", "Doe");
$dog = new Dog("Johnny");

$person->buy($dog);

var_dump($person);










