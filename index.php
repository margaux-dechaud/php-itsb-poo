<?php

class Person {
    private $firstname;
    private $lastname;

    /**
     * Création d'un setter (ou mutateur)
     *
     * @param $pFirstname
     */
    public function setFirstname($pFirstname) {
        $this->firstname = $pFirstname;
    }

    /**
     * Création d'un getter (ou accesseur)
     *
     * @return mixed
     */
    public function getFirstname() {
        return $this->firstname;
    }

    public function setLastname($pLastname) {
        $this->lastname = $pLastname;
    }

    public function getLastname() {
        return $this->lastname;
    }
}

$person1 = new Person();
//$person1->firstname = "John";
//$person1->lastname = "Doe";

$person1->setFirstname("John");
$person1->setLastname("Doe");

var_dump($person1->getFirstname());
var_dump($person1->getLastname());

//$person2 = new Person();
//$person2->firstname = "Jane";
//$person2->lastname = "Die";

//$person2->setFirstname("Jane");
//$person2->setLastname("Die");
//
//var_dump($person2);