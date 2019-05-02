//mobile menu
var sideMenu = document.querySelector('.menu');
document.querySelector('.burger').addEventListener("click", function(){
    sideMenu.classList.toggle('show');
    this.classList.toggle('close');
});

//Burger change on scroll
var $burger = document.querySelector('.burger');


jQuery(function() {
   jQuery(window).scroll(function () {
      if ( jQuery(this).scrollTop() >= 600 ) {
         jQuery($burger).addClass("changeColor")
      }
      if ( jQuery(this).scrollTop() <= 590 ) {
         jQuery($burger).removeClass("changeColor")
      }
   });
});

var nav = document.querySelector('.navigation');

if (window.innerWidth >= 765) {
  jQuery(function() {
     jQuery(window).scroll(function () {
        if ( jQuery(this).scrollTop() > 600 ) {
           jQuery(nav).addClass("nav-scroll")
        }
        if ( jQuery(this).scrollTop() < 50 ) {
           jQuery(nav).removeClass("nav-scroll")
        }
     });
  });

}



//Scroll and Show elements
window.addEventListener("scroll",  scrolling);

const titles = document.querySelectorAll('.hide');
const act_btn = document.querySelector('.btn-fancy');
const works = document.querySelectorAll('.hide-work');

var isScrolling = false;

window.addEventListener("scroll", throttleScroll);

function throttleScroll(e) {
    if (isScrolling == false ) {
        window.requestAnimationFrame(function() {
          scrolling(e);
          isScrolling = false;
        });
    }
    isScrolling = true;
}

//begging of scroll check
function scrolling(e){

  for (let i = 0; i < titles.length; i++) {
    let list = titles[i];
    if (isFullyVisible(list)) {
      list.classList.remove('hide');
      list.classList.add('slide-in-left');
    }
  }

  for (let i = 0; i < works.length; i++) {
    let work = works[i];
    if (isFullyVisible(work)) {
      work.classList.remove('hide-work');
      work.classList.add('slide-in-right');
    }
  }

}
//end of scrolling check

//function to check if element is fully visible
function isFullyVisible(el){
  var boundary = el.getBoundingClientRect();
  var top = boundary.top;
  var bottom = boundary.bottom;

  return ((top >= 0) && (bottom <= window.innerHeight));
}
