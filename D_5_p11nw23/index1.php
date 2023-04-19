<?php //Zadatak br. 1
/*Izvršiti konverziju temperature iz Farenhajta u Kelvine i obratno, ukoliko su date sledeće dve formule:

Celzijus = (Farenhajt - 32) * 5/9
Kelvin = Celzijus + 273.15

Temperaturu u Farenhajtima i Kelvinima zadati samostalno.
 */
$Farenhajt = 104;
$Celzijus = ($Farenhajt -32) * 5 / 9;
$Kelvin = $Celzijus + 273.15;
$JedanKelvin = $Kelvin / $Farenhajt;
$JedanFarenhajt = $Farenhajt / $Kelvin; 
echo "<br>";
echo "1K= " . " $JedanKelvin" . " Farenhajta";
echo "<br>";
echo "1F= " . "$JedanFarenhajt" . " Kelvina";

?>