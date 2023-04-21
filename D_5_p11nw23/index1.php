<?php 
//Zadatak br. 1
echo "Zadatak br.1";
echo "<br>";
$Farenhajt = 104;
$Celzijus = ($Farenhajt -32) * 5 / 9;
$Kelvin = $Celzijus + 273.15;
echo "$Kelvin";
echo "<br>";
$Kelvin = 300;
$Celzijus = $Kelvin - 273.15;
$Farenhajt = $Celzijus * 9 / 5 + 32;
echo "$Farenhajt";
echo "<br>";
echo "<hr>";
//Zadatak br. 2
echo "Zadatak br.2";
echo "<br>";
$n = 110;
$a = 7;
$drugiDan = $a + 2;
$ostaloPoglavlja = $n - ($a + $drugiDan);
echo "Ostalo je da procita jos " . $ostaloPoglavlja . " poglavlja.";
echo "<br>";
echo "<hr>";
//Zadatak br.3
echo "Zadatak br.3";
echo "<br>";
$p = 800;
$m = 700;
$k = 200;
$Dzemper = ($p + $m - $k) / 2;
$PerinKusur = $p - $Dzemper;
$MikinKusur = $m - $Dzemper;
echo "Perin kusur je " . $PerinKusur . " dinara";
echo "<br>";
echo " Mikin kusur je " . $MikinKusur . " dinara";
echo "<br>";
echo "Da bi jednako platili svako svoj dzemper Perin i Mikin kusur treba da je isti ili jednak 0, ili da obojica dobiju kusur u nekom iznosu.";
echo "<hr>";












?>
