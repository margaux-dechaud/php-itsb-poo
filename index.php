<?php

class Mammal {
    private $years = 0;

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
}

class Dog extends Mammal {
    private $name;
}

$person = new Person(1);

var_dump($person);