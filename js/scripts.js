var sideMenu = document.querySelector('.menu');
document.querySelector('.burger').addEventListener("click", function(){
    sideMenu.classList.toggle('show');
    this.classList.toggle('close');
});

const nav = document.querySelector('nav');
console.log(nav.clientHeight);

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
  } else{
    act_btn.classList.remove('slide-in-right');
    act_btn.classList.add('hide');
  }

  for (let i = 0; i < titles.length; i++) {
    let list = titles[i];
    if (isFullyVisible(list)) {
      list.classList.remove('hide');
      list.classList.add('slide-in-left');
    } else {
      list.classList.remove('slide-in-left');
      list.classList.add('hide');
    }
  }

  for (let i = 0; i < works.length; i++) {
    let work = works[i];
    if (isPartiallyVisible(work)) {
      work.classList.remove('hide-work');
      work.classList.add('slide-in-right');
    } else {
      work.classList.remove('slide-in-right');
      work.classList.add('hide-work');
    }
  }

}


function isFullyVisible(el){
  var boundary = el.getBoundingClientRect();

  var top = boundary.top;
  var bottom = boundary.bottom;

  return ((top >= 0) && (bottom <= window.innerHeight));
}

function isPartiallyVisible(el){
  var boundary = el.getBoundingClientRect();

  var top = boundary.top;
  var bottom = boundary.bottom;
  var height = boundary.height;

  return ((top + height >= 0) && (height + window.innerHeight >= bottom));
}





// console.log(isPartiallyVisible(act_btn));


//slider

// Variables
// const track = document.querySelector('.carousel__track');
// const slides = Array.from(track.children);
// const nextBtn = document.querySelector('.carousel_btn--right');
// const prevBtn=  document.querySelector('.carousel_btn--left');
// // add dots as future add on.
// console.log(slides);
// const slideWidth = slides[0].getBoundingClientRect().width;
//
// // arrange slides next to each other
// const setSlidePosition = (slide, index) => {
//   slide.style.left = slideWidth * index + 'px';
// }
// slides.forEach(setSlidePosition);
//
//
// const moveToSlide = (track, currentSlide, targetSlide) => {
//   track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
//   currentSlide.classList.remove('current');
//   targetSlide.classList.add('current');
// }
//
//
// // Click left, move slides to the right
// prevBtn.addEventListener('click', e => {
//   const currentSlide = track.querySelector('.current');
//   const prevSlide = currentSlide.previousElementSibling;
//   moveToSlide(track, currentSlide, prevSlide);
// })
// // Click right, move slides to the left
// nextBtn.addEventListener('click', e => {
//     const currentSlide = track.querySelector('.current');
//     const nextSlide = currentSlide.nextElementSibling;
//   //move to the next slide
//     moveToSlide(track, currentSlide, nextSlide);
// });
