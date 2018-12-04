<?php

class Person {
    private $firstname;
    private $lastname;

    public function setFirstname($pFirstname) {
        $this->firstname = $pFirstname;
    }

    public function setLastname($pLastname) {
        $this->lastname = $pLastname;
    }
}

$person1 = new Person();
//$person1->firstname = "John";
//$person1->lastname = "Doe";

$person1->setFirstname("John");
$person1->setLastname("Doe");

var_dump($person1);

//$person2 = new Person();
//$person2->firstname = "Jane";
//$person2->lastname = "Die";
//var_dump($person2);