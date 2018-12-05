<?php

interface IActions {
    public function seMarier($p);
}

class Person implements IActions {
    private $partner;
    private $firstname;
    private $lastname;

    public function __construct($pFirstname, $pLastname) {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

    public function setLastname($p) {
        $this->lastname = $p;
    }

    public function seMarier($p) {
        $p->setLastname($this->lastname);

        $this->partner = $p;
    }
}

class Dog implements IActions {
    private $partner;
    private $name;

    public function seMarier($p) {
    }
}

$john = new Person("John", "Doe");
$jane = new Person("Jane", "Die");

$john->seMarier($jane);

var_dump($john);