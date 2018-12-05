<?php

interface IAction {
    public function avancer();
}

abstract class Vehicule implements IAction {
//    public function avancer() {
//        var_dump("J'avance...");
//    }
}

class Car extends Vehicule {
    public function avancer() {
        var_dump("Je suis un Car et j'avance");
    }
}
class Bike extends Vehicule {
    public function avancer() {
        var_dump("Je suis un Bike et j'avance");
    }
}

class User implements IAction {
    private $vehicule;

    public function setVehicule(IAction $pVehicule) {
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