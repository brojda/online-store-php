"use strict"
function goto(url) {
  window.location.replace(url);
}
function selectP1(idL, name) {
    const rbs = document.querySelectorAll('input[name='+name+']');
    let selectedValue;
    for (const rb of rbs) {
      if (rb.checked) {
        var x;
        x=rb.id;
        x=x.replace('-r','');
        document.getElementById(x).style.boxShadow="none";
        break;
      }
    }
    idL.style.boxShadow = "inset 0 0 0 2px #ff4747";
}
/*
function selectP(idL, idH) {
  const rbs = document.querySelectorAll('input[name='+idH+']');
  for (const rb of rbs) {
    if (rb.checked) {
      //window.idH.innerHTML=rb.value;
      break;
    }
  }
}
*/
