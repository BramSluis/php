function naamcheck(){
  if(  document.getElementById("voornaam").value.length < 2){
    document.getElementById("results").innerHTML = "uw voornaam moet minimaal 2 karakters bevatten"
  }
    else{
      document.getElementById("results").innerHTML = " "
    }
}


function anaamcheck(){
  if(  document.getElementById("voornaam").value.length < 2){
    document.getElementById("results").innerHTML = "uw achternaam moet minimaal 2 karakters bevatten"
  }
    else{
      document.getElementById("results").innerHTML = " "
    }
}

