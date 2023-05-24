<?php

class Autobus{
    private $registracija;
    private $sedista;

    public function __construct($reg, $sed){
        $this->setRegistracija($reg);
        $this->setSedista($sed);
    }

    public function setRegistracija($reg){
        $this->registracija= $reg;
    }
    public function setSedista($sed){
        $this->sedista = $sed;
    }

    public function getRegistracija(){
        return $this->registracija;
    }
    public function getSedista(){
        return $this->sedista;
    }

    public function ispis(){
        echo "Autobus registracije " . $this->registracija . " ima " . $this->sedista . " sedista.";
    }
    public function ukupnoSedista($autobusi){
        
    }

}

$autobus1 = new Autobus("BG-356-in", 40);
$autobus->ispis();
echo "<hr>";

$autobus2 = new Autobus("NS-402-ts", 35);
$autobus->ispis();
echo "<hr>";

$autobus3 = new Autobus("KG-205-ho", 45);
$autobus->ispis();
echo "<hr>";

$autobusi = [$autobus1, $autobus2, $autobus3];














?>