// function naamcheck(){
//   if(  document.getElementById("voornaam").value.length < 2){
//     document.getElementById("results").innerHTML += "uw voornaam moet minimaal 2 karakters bevatten"
//   }
//     else{
//       document.getElementById("results").innerHTML = " "
//     }
// }

// function anaamcheck(){
//   if(  document.getElementById("voornaam").value.length < 2){
//     document.getElementById("results").innerHTML += "uw achternaam moet minimaal 2 karakters bevatten"
//   }
//     else{
//       document.getElementById("results").innerHTML = " "
//     }
// }

function errorform() {
    let elvn = document.getElementById("voornaam").value;
    let elan = document.getElementById("achternaam").value;
    let elad = document.getElementById("adres").value;
    let elpo = document.getElementById("postcode").value;
    let elpl = document.getElementById("plaats").value;
  
    let errormsg = new Array();
    if (elvn.length < 2) {
      errormsg.push("uw voornaam moet minimaal 2 karakters bevatten");
    }
    if (elan.length < 2) {
      errormsg.push("uw achternaam moet minimaal 2 karakters bevatten");
    }
    if (elad.length < 2) {
      errormsg.push("uw adres moet minimaal 2 karakters bevatten");
    }
    if (elpo.length < 6) {
      errormsg.push("uw postcode moet minimaal 6 karakters bevatten");
    }
    if (elpl.length < 2) {
      errormsg.push("uw plaatsnaam moet minimaal 2 karakters bevatten");
    }
  
    let errorlist = "";
    errormsg.forEach(function (message) {
      errorlist += "<li>" + message + "</li>";
    });
    document.getElementById("results").innerHTML = errorlist;
  }
  