<?php

class Dog {
    private $name;

    /**
     * Création d'un setter avec formattage de la donnée
     *
     * @param string $pName
     */
    public function setName(string $pName) {
        $this->name = ucfirst($pName);
    }

    /**
     * Création d'un getter
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }
}

$dog = new Dog();

// $dog->name = "Johnny"
$dog->setName("johnny");

var_dump($dog);