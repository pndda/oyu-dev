var prevScrollpos = window.pageYOffset;
var navhide = document.getElementById("navbar");


var navhidemob = document.getElementById("mobnavbar");

window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    navhide.classList.remove('scrolled-down'); 
    navhide.classList.add('scrolled-up'); 
    navhidemob.classList.remove('scrolled-down'); 
    navhidemob.classList.add('scrolled-up'); 
  } else {
    navhide.classList.add('scrolled-down'); 
    navhide.classList.remove('scrolled-up');
    navhidemob.classList.add('scrolled-down'); 
    navhidemob.classList.remove('scrolled-up');
  }
  prevScrollpos = currentScrollPos;
}
