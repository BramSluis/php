<?php 

  $leeftijd = readline("Voer uw leeftijd in om uw prijs te berekenen:"  );

if($leeftijd < 3) { 

 echo "uw ticket is gratis";

} 
 
elseif($leeftijd > 3 && $leeftijd <= 16) {

     echo "uw ticket is 6 euro";

}
    
elseif($leeftijd >= 16 && $leeftijd <= 64) { 

     echo "uw ticket kost 12 euro";    

}

elseif($leeftijd >= 65) { 

     echo "uw ticket kost 9 euro";

}


?> 
