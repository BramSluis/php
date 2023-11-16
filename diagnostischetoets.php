<?php

$l1 = readline("voer een leeftijd in: ");
$l2 = readline("voer een tweede leeftijd in:");
$l3 = readline("voer een derde leeftijd in: ");
$l4 = readline("voer een vierde leeftijd in: ");
$l5 = readline("voer een vijfde leeftijd in: "); 

$aantalreadlines = "5";

$leeftijden = array($l1, $l2, $l3, $l4, $l5);
$i = "0";
$o = "0";
foreach ($leeftijden as $value){

    if("$value" < "18"){ 
        $i++;
    }

    else {
        $o++;
    }
}

echo "\n er zijn $i mensen jonger dan 18 \n ";
echo "er zijn $o mensen ouder dan 18 \n ";

echo "de gemiddelde leeftijd is: ".   ceil(($l1+$l2+$l3+$l4+$l5) / $aantalreadlines)   ;

// ik weet niet of dit de bedoeling was. het is niet future proof.
// als het aantal gevraagde leeftijden veranderd moet je dit zelf helemaal handmatig aanpassen. etc
// dit zou ik kunnen toepassen in de opdracht maar daar word niet naar gevraagd...
