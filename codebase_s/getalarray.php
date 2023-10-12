<?php
$input = readline("geef een getal tussen 1 en 500 \n");

$v = array();
for($i=0; $i<=19; $i++){
$v[]=rand(0,500);
}
for ($k=0; $k <19 ; $k++) { 
    if ($v[$k]< $input) {
        echo "vijf eraf";
        $v[$k]-= 5;
    }
}
foreach ($v as $w)
{
    echo "$w \n";
  
}

