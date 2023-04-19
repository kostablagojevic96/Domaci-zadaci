<?php
// Zadatak br.3
$Pera1 = 800;
$Mika1 = 600;
$Kusur = 400;
$Dzemper = ($Pera1 + $Mika1 - $Kusur) / 2;
$PerinKusur = $Pera1 - $Dzemper;
$MikinKusur = $Mika1 - $Dzemper;
echo "Perin kusur je " . $PerinKusur . " dinara";
echo "<br>";
echo " Mikin kusur je " . $MikinKusur . " dinara";
echo "<br>";
echo "<hr>";


$Pera = 1000;
$Mika = 1400;
$Kusur = 300;
$Dzemper = ($Pera + $Mika - $Kusur) / 2;
$PerinKusur = $Pera - $Dzemper;
$MikinKusur = $Mika - $Dzemper;
echo "Perin kusur je " . $PerinKusur . " dinara, a ako je broj u minusu onda taj oznos Pera duguje Miki, a ako je iznos veci od kusura, onda taj iznos preko mu duguje Mika.";
echo "<br>";
echo " Mikin kusur je " . $MikinKusur . " dinara, a ako je broj u minusu onda taj oznos Mika duguje Peri, a ako je iznos veci od kusura onda taj iznos preko mu duguje Pera.";
echo "<br>";
echo "Da bi jednako platili svako svoj dzemper Perin i Mikin kusur treba da je isti ili jednak 0.";
?>