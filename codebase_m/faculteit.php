<?php

$getal = readline("geef een getal op waarvan u de faculteit wilt berekenen: \n");

if(is_numeric($getal)){

    $i = 1; 
$getal2 = 1;

while($i != $getal)
{
    $getal2=$getal2 * ($i+1);
    $i++;       
}

echo "$getal2";

}
else{
    echo "dit is geen getal";
}
/*$getal = readline("geef een getal op waarvan u de faculteit wilt berekenen: \n");

$i = 1; 
$getal2 = 1;

while($i != $getal)
{
    $getal2=$getal2 * ($i+1);
    $i++;       
}

echo "$getal2";
?>*/