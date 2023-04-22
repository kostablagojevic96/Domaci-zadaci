<?php

//Zadatak br.1
date_default_timezone_set('Europe/Belgrade');
$sati = date("H");
$dani = date("N");
//echo "<p>$sati $dani</p>";
//radni dani 09-20h, 1-5,
//vikend 10-18 6-7,
if($sati >=9 && $sati <20 && $dani <=5)
{
    echo "<p>Butik je otvoren</p>";
}
elseif($sati >=10 && $sati <18 && $dani >5)
{
    echo "<p>Butik je otvoren</p>";
}
else
{
    echo "<p>Butik je zatvoren</p>";
}
//Zadatak br.2
$BrojStanovnika = 1000;
$Testirani = 100;
$Pozitivni = 60;
//if($Pozitivni > ($Testirani * 0.3) || $Pozitivni > ($BrojStanovnika * 0.1))

if(($Pozitivni / $Testirani > 0.3) || ($Pozitivni / $BrojStanovnika > 0.1) )

{
    echo "<p style = 'color: red;'>VANREDNO STANJE</p>";
}
else
{
    echo "";
}
?>
