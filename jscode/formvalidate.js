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
  let errormsg = new Array();
  if (document.getElementById("voornaam").value.length < 2) {
    errormsg.push("uw voornaam moet minimaal 2 karakters bevatten");
  }
  if (document.getElementById("achternaam").value.length < 2) {
    errormsg.push("uw achternaam moet minimaal 2 karakters bevatten");
  }
  if (document.getElementById("adres").value.length < 2) {
    errormsg.push("uw adres moet minimaal 2 karakters bevatten");
  }
  if (document.getElementById("postcode").value.length < 6) {
    errormsg.push("uw postcode moet minimaal 6 karakters bevatten");
  }
  if (!document.getElementById("plaats").value.length < 2) {
    errormsg.push("uw plaatsnaam moet minimaal 2 karakters bevatten");
  }

  let errorlist = "";
  errormsg.forEach(function (message) {
    errorlist += "<li>" + message + "</li>";
  });
  document.getElementById("results").innerHTML = errorlist;
}
