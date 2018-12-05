<?php

class Mammal {
    private $years = 0;

    public function __construct(int $pYears) {
        $this->years = $pYears;
    }

    /**
     * @return int
     */
    public function getYears(): int
    {
        return $this->years;
    }

    /**
     * @param int $years
     */
    public function setYears(int $years): void
    {
        $this->years = $years;
    }
}

class Person extends Mammal {
    private $firstname;
    private $lastname;

    public function __construct(string $pFirstname, string $pLastname, int $pYears) {
        parent::__construct($pYears);

        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }
}

class Dog extends Mammal {
    private $name;

    public function __construct(string $pName, int $pYears) {
        parent::__construct($pYears);

        $this->name = $pName;
    }
}

$person = new Person("John", "Doe", 1);
var_dump($person);

$dog = new Dog("Boby", 1);
var_dump($dog);