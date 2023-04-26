<?php
/* Zadatak 1. Odrediti zbir cifara unetog celog broja i dobijeni zbir ispisati na ekranu:


a) Ukoliko je zbir cifara broja jednak samom broju, na ekranu se zbir ispisuje uokviren narandžastom bojom
Npr. za broj 5 zbir cifara je 5, što je jednako unetom broju 5


b) Ukoliko je zbir cifara broja manji od samog broja, na ekranu se zbir ispisuje uokviren plavom bojom.
Npr. za broj 101 zbir cifara je 1+0+1 = 2, što je manje od unetog 101*/

$broj = 153;
$zbir = 0;
$broj2 = $broj;
while($broj > 0)
{
    $cifra = $broj % 10;
    $broj = $broj / 10;
    $zbir += $cifra;
}
if($zbir == $broj2)
{
    echo "<p style='border:3px solid orange;'>$zbir</p>";
}
if($zbir < $broj2)
{
    echo "<p style='border:3px solid blue;'>$zbir</p>";
}
echo "<hr>";
// Zadatak br. 2
$broj = 15;
$n = $i = 1;
$brojevi = 0;
for($i=$n; $i <= $broj; $i++)
{
    $brojevi = $i;
    if($broj % $i == 0)
    {
        if($brojevi % 3 == 0 && $brojevi % 2 != 0 )
        {
            echo "$brojevi ";
        }
    } 
}
echo "<hr>";
// Zadatak br.3 For petljom odrediti da li je dati prirodan broj n prost. Broj je prost ako je deljiv samo sa jedinicom i sa samim sobom.
$br = 0;
$n = 13;
for($i = 1; $i <= $n; $i++)
{
   if($n % $i == 0)
    {
        $br++;
    }
}
if($br == 2)
{
    echo "Broj $n je prost";
}
else
{
    echo "Broj $n nije prost";
}

?>