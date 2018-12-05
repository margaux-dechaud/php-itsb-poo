<?php

class Person {
    private $dogs = array(); // Optionnel de faire "= array()"
    private $firstname;
    private $lastname;

    public function __construct(string $pFirstname, string $pLastname) {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function speak(): string {
        $string = "Je suis $this->firstname $this->lastname et mes chiens sont : ";

        $listDogs = array();

        foreach ($this->dogs as $dog) {
            $listDogs[] = $dog->getName();
        }

        return $string . implode(', ', $listDogs);
    }

    public function buy(Dog $pDog) {
        $this->dogs[] = $pDog;

        // $this->dog->setOwner($this);
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
        return "Mon maitre est " . $this->owner->getFirstname() . " " . $this->owner->getLastname() . " et je suis $this->name";
    }
}

$person = new Person("John", "Doe");

$dog = new Dog("Johnny");

$person->buy($dog);

$dogBoby = new Dog("Boby");

$person->buy($dogBoby);

//var_dump($person);

var_dump($person->speak());
//var_dump($dog->speak());

//$dogs = array();
//
//$dogs[] = $dog;
//$dogs[] = $dogBoby;
//
//var_dump($dogs);




