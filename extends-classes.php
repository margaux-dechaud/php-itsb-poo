<?php

abstract class Animal {
    private $years = 0;

    public function __construct(int $pYears) {
        $this->years = $pYears;
    }
}

abstract class Mammal extends Animal { }
abstract class Oviparous extends Animal {
    private $isMoult = false;
}

final class Person extends Mammal {
    private $firstname;
    private $lastname;

    public function __construct(string $pFirstname, string $pLastname, int $pYears) {
        parent::__construct($pYears);

        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }
}

final class Dog extends Mammal {
    private $name;

    public function __construct(string $pName, int $pYears) {
        parent::__construct($pYears);

        $this->name = $pName;
    }
}

final class Gecko extends Oviparous {
    private $name;

    public function __construct(string $pName, int $pYears) {
        parent::__construct($pYears);

        $this->name = $pName;
    }
}

$person = new Person("John", "Doe", 1);
var_dump($person);

//$dog = new Dog("Boby", 1);
//var_dump($dog);

$gecko = new Gecko("Geek", 1);
var_dump($gecko);