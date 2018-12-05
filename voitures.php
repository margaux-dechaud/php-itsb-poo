<?php

class Vehicule {
    private $typeMoteur;
    private $typeCarburant;
    private $nbPassagers;
    private $nbVitesses;
}

class Terrestre extends Vehicule {
    private $nbRoues;
}
class Nautique extends Vehicule { }

class Voiture extends Terrestre {}
class Moto extends Terrestre {}
class Bateau extends Nautique {}
