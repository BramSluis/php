<?php
$getal = readline("hoeveel lagen moet je pyramide hebben?");


for($p=0;$p<$getal; $p++){

    for($s=0; $s<=$p; $s++){
        echo"*";
    }

    echo"\n";

}
