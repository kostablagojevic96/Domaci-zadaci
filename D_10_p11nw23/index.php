<?php

class TekuciRacun{
    private $BrojRacuna;
    private $Stanje;
    private $Kurs;

    public function setBrojRacuna($b){
        $this->BrojRacuna= $b;
    }
    public function setStanje($s){
        $this->Stanje=round($s,2);
    }
    public function setKurs($k){
        $this->Kurs= $k;
    }
    public function getBrojRacuna(){
        return $this->BrojRacuna;
    }
    public function getStanje(){
        return $this->Stanje;
    }
    public function getKurs(){
        return $this->Kurs;
    }
    public function uplati($iznos, $valuta){
        if($valuta === "RSD"){
            $this->Stanje+=round($iznos,2);
        }
        else{
            $this->Stanje+=round(($this->Kurs * $iznos),2);
        }
    }
    public function isplati($iznos, $valuta){
        if($iznos > $this->Stanje && $valuta === "RSD"){
           return false;
        }
        elseif($iznos * $this->Kurs > $this->Stanje && $valuta === "EUR"){
            return false;
        }
        elseif($this->Stanje >= $iznos && $valuta === "RSD"){
             $this->Stanje=$this->Stanje - $iznos;
             return true;
        }
        elseif($valuta === "EUR"){
            $din = round(($this->Kurs * $iznos),2);
            $this->Stanje=$this->Stanje - $din;
            return true;
        }
    }
    public function stanje(){
        /*$novac = isplati($plati2, $valuta2);*/
        //if($novac < $this->Stanje){
        date_default_timezone_set('Europe/Belgrade');
        $dan = date('d.m.Y. H:i');
       echo "Stanje na racunu broj " . $this->BrojRacuna . " na dan i vreme: " . $dan . " je: " . $this->Stanje . " RSD";
       /* }
        else{
            echo "Na racunu nemate dovoljno paraaaa";
        }*/
    }
}
$f1 = new TekuciRacun();
$f1->setBrojRacuna("77797456");
$f1->setKurs(round((117.123456),4));
$f1->uplati(5000, "RSD");
$f1->uplati(20, "EUR");
$f1->stanje();
echo "<hr>";
$f1->isplati(2000, "RSD");
$f1->stanje();
echo "<hr>";
$f1->isplati(2, "EUR");
$f1->stanje();
echo "<hr>";
$f1->isplati(3000, "RSD");
$f1->stanje();
echo "<hr>";
/////////////////////////////////////////////////////////////////
$f2 = new TekuciRacun();
$f2->setBrojRacuna("5554628764");
$f2->setKurs(round((120.123456),4));
$f2->uplati(50, "EUR");
$f2->stanje();
echo "<hr>";
$f2->uplati(100, "EUR");
$f2->stanje();
echo "<hr>";
$f2->isplati(100, "EUR");
$f2->stanje();
echo "<hr>";
$f2->isplati(4000, "RSD");
$f2->stanje();
echo "<hr>";
$f2->uplati(100, "EUR");
$f2->stanje();
echo "<hr>";
$f2->uplati(4000.2353, "RSD");
$f2->stanje();
echo "<hr>";
//////////////////////////////////////////////////////////////////
$f3 = new TekuciRacun();
$f3->setBrojRacuna("1116293562");
$f3->setKurs(round((105.123456),4));
$f3->uplati(150, "EUR");
$f3->stanje();
echo "<hr>";
$f3->isplati(40, "EUR");
$f3->isplati(1000, "RSD");
$f3->stanje();
echo "<hr>";
?>