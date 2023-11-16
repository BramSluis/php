<?php 
$a = 5;
$ui = array();
for($i = 1; $i <=$a; $i++){
    $ui[] = readline("geef een leeftijd op vieze klootzak; ");
}

$j = 0;
$o = 0;

foreach($ui as $value){
    if($value <18){
        $j++;
    }
    else{ 
        $o++;
    }
}

echo "er zijn $j mensen jonger dan 18 \n"  ;
echo "er zijn $o mensen ouder dan 18 \n";
echo "de gemiddelde leeftijd = ".  array_sum($ui) / $a;
?>
