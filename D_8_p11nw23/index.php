<!DOCTYPE html>
<html>
<head>
    <title>Domaci br 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Zadatak br 1 Odrediti proizvod brojeva od $n do $m koji su deljivi sa 7 a nisu sa 3, a potom od njega oduzeti zbir brojeva od $n do $m koji su deljivi sa 3 a nisu sa 7:
// a) Koristeći while petlju
$i = $n = 5;
$m = 15;
$p = 1;
$zbir = 0;
while($i <= $m)
{
    if($i % 7 == 0 && $i % 3 != 0)
    {
        $p *= $i;
    }
    if($i % 3 == 0 && $i % 7 != 0)
    {
        $zbir += $i;
    }
    
    $i++;
    $rezultat = $p - $zbir;
}
echo "1 a) Razlika brojeva deljivih sa 3 a ne sa 7 od brojeva deljivih sa 7 a ne sa 3 je: $rezultat";
echo "<hr>";
// b) Kotisteći for petlju
$n = 5;
$m = 15;
$p = 1;
$zbir = 0;
for($i = $n; $i <= $m; $i++)
{
    if($i % 7 == 0 && $i % 3 != 0)
    {
        $p *= $i;
    }
    if($i % 3 == 0 && $i % 7 != 0)
    {
        $zbir += $i;
    }
    $rezultat = $p - $zbir; 
}
echo "1 b) Razlika brojeva deljivih sa 3 a ne sa 7 od brojeva deljivih sa 7 a ne sa 3 je: $rezultat";
echo "<hr>";
// Zadatak br. 2 Odrediti sumu kubova neparnih brojeva od $n do $m:
// a) Koristeći while petlju
$n = $i = 5;
$m = 15;
$p = 1;
$suma = 0;
while($i <= $m)
{
    if($i % 2 != 0)
    {
        $p = $i**3;
        $suma += $p;
    }
    $i++;
}
echo "2 a) $suma ";
echo "<hr>";
// b) Koristeći for petlju
$n = 5;
$m = 15;
$p = 1;
$suma = 0;
for($i = $n; $i <= $m; $i++)
{
    if($i % 2 != 0)
    {
        $p = $i**3;
        $suma += $p;
    }
}
echo "2 b) $suma ";
echo "<hr>";
// Zadatak br. 3
$filmovi = ["Betmen", "Coco", "Forrest Gump","Supermen", "Umri muski 1"];
$reziseri = ["Cristopher Nolan", "Adrian Molina", "Robert Zemeckis","Richard Doner", "John McTiernan"];
$slicice = ["slike/betmen.jpg", "slike/coco.jpg", "slike/forest_gump.jpg", "slike/supermen.jpg", "slike/umri_muski_1.jpg"];

for($i = 0; $i < count($filmovi); $i++)
{
    echo "<p><span>$filmovi[$i]</span><br> $reziseri[$i]</p><div class='slike'><img src ='$slicice[$i]'></div>";
}
?>
</body>
</html>