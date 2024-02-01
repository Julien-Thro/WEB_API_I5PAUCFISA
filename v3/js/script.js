/* ---------------------------------------------------------------- */
document.addEventListener('DOMContentLoaded', function() { updateFooterContent(); });
function updateFooterContent() {
  var footerContentElement = document.getElementById('footer-content');
  if (footerContentElement) { footerContentElement.innerHTML = '&copy; 2022 <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">Julien THRO</a> et <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank">Razi BENHASSEN</a>, I5 PAUC FISA, UNILASALLE AMIENS.'; }
}
/* --------------------------------------------------------------- */
document.addEventListener('DOMContentLoaded', function() { updateNavContent(); });
function updateNavContent() {
  var footerContentElement = document.getElementById('menu-nav-bandeau');
  if (footerContentElement) { footerContentElement.innerHTML ='<a href="index.html">Accueil</a><a href="villes.html">Villes</a><a href="avion.html">Avion</a><a href="#">X</a><a href="uwu.html">Page de Test</a>'; }
}
/* ------------------------------------------------------------- 
window.onload = function() {
  var modal = document.getElementById("myModal");
  var blur1 = document.getElementsByTagName("main")[0];
  var blur2 = document.getElementsByTagName("header")[0];
  var blur3 = document.getElementsByTagName("footer")[0];
  modal.style.display = "block";
  blur1.classList.add("blur");
  blur2.classList.add("blur");
  blur3.classList.add("blur");
}

// Fermer la fenetre Popup lorsque l'on clique sur le bouton OK
document.getElementById("btnOk1").onclick = function() {
  removeBlur();
}
document.getElementById("btnOk2").onclick = function() {
  removeBlur();
}
document.getElementById("btnOk3").onclick = function() {
  removeBlur();
}

function removeBlur() {
  var modal = document.getElementById("myModal");
  var blur1 = document.getElementsByTagName("main")[0];
  var blur2 = document.getElementsByTagName("header")[0];
  var blur3 = document.getElementsByTagName("footer")[0];
  modal.style.display = "none";
  blur1.classList.remove("blur");
  blur2.classList.remove("blur");
  blur3.classList.remove("blur");
}

*/