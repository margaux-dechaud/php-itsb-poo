<?php

class Person {
    private $dog;
    private $firstname;
    private $lastname;

    public function __construct(string $pFirstname, string $pLastname) {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

    public function speak(): string {
        return "Je suis " . $this->firstname . " " . $this->lastname . " et mon chien est " . $this->dog->getName();
    }

    public function buy(Dog $pDog) {
        $this->dog = $pDog;

        $this->dog->setOwner($this);
    }
}

class Dog {
    private $owner;
    private $name;

    public function __construct(string $pName) {
        $this->name = $pName;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setOwner(Person $pOwner) {
        $this->owner = $pOwner;
    }

    public function speak(): string {
        return "Mon maitre est JD et je suis J";
    }
}

$person = new Person("John", "Doe");
$dog = new Dog("Johnny");

$person->buy($dog);

var_dump($person->speak());









