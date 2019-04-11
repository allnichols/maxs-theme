//mobile menu
var sideMenu = document.querySelector('.menu');
document.querySelector('.burger').addEventListener("click", function(){
    sideMenu.classList.toggle('show');
    this.classList.toggle('close');
});

//scroll to section


//Scroll and Show elements
let isScrolling = false;

window.addEventListener("scroll",  throttleScroll, false);

function throttleScroll(e){
  if (isScrolling == false) {
    window.requestAnimationFrame(function(){
      scrolling(e);
      isScrolling = false;
    })
  }
}

document.addEventListener("DOMContentLoaded", scrolling, false);

const titles = document.querySelectorAll('.hide');
const act_btn = document.querySelector('.btn-fancy');
const works = document.querySelectorAll('.hide-work');


function scrolling(e){

  if (isFullyVisible(act_btn)) {
     act_btn.classList.remove('hide');
     act_btn.classList.add('slide-in-right');
  }

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

function isFullyVisible(el){
  var boundary = el.getBoundingClientRect();
  var top = boundary.top;
  var bottom = boundary.bottom;

  return ((top >= 0) && (bottom <= window.innerHeight));
}
