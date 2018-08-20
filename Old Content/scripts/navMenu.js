function navMenu() {
  var element = document.getElementById('mainNav');
  var navIcon = document.getElementById('navIcon');

  if (element.className == "navClosed") {
    element.className = "navOpen";
    navIcon.style.backgroundColor = "rgba(255,159,26,1)";
  } else {
    element.className = "navClosed";
    navIcon.style.backgroundColor = "rgba(21,23,33,1)";
  }
}