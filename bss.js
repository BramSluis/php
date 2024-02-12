function Calculate() {
  let elch = parseInt(document.getElementById("currenthoney").value);
  let elhh = parseInt(document.getElementById("hourlyhoney").value);
  let elhg = parseInt(document.getElementById("honeygoal").value);
  let time = elhg/(elhh+elch); 

  document.getElementById("output").innerHTML = "you will have to farm for about " +time+" hours";
}
