<?php

$gewicht = readline("voer uw gewicht in in kilo's: \n");

$lengte = readline("voer uw lengte in in meters: \n");

$bmi = $gewicht / ($lengte * $lengte);

echo " uw bmi is : $bmi \n";

if($bmi <18.5 ){
    echo "u heeft ondergewicht";
}

elseif($bmi > 18.5 && $bmi <25){
    echo "u heeft een gezond gewicht";
}

elseif($bmi >= 25 && $bmi <30){
    echo "u heeft overgewicht";
}

elseif($bmi >30){
    echo "u heeft ernstig overgewicht";
}

?> 