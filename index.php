<?php

class Person {
    private $firstname;
    private $lastname;

    public function __construct($pFirstname, $pLastname) {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

    public function speak() { }
}

class Dog {
    private $name;
}

$person = new Person("John", "Doe");

var_dump($person);










