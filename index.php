<?php

abstract class Vehicule {
    public function avancer() {
        var_dump("J'avance...");
    }
}

class Car extends Vehicule { }
class Bike extends Vehicule { }

class User {
    private $vehicule;

    public function setVehicule(Vehicule $pVehicule) {
        $this->vehicule = $pVehicule;
    }

    public function avancer() {
        $this->vehicule->avancer();
    }
}

$car = new Car();

$user = new User();
$user->setVehicule($car);

$user->avancer();