var sideMenu = document.querySelector('.menu');
document.querySelector('.burger').addEventListener("click", function(){
    sideMenu.classList.toggle('show');
    this.classList.toggle('close');
});

const nav = document.querySelector('nav');

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

// End of show elements on page scroll

jQuery(document).ready(function ($) {
  const $links = $('.menu-item a');

  $links.on('click', function(event){
      event.preventDefault();

      const href = $(this).attr("href");

      window.history.pushState(null, null, href);

      $.ajax({
        url: href,
        success: function(data) {
          $('.next').fadeOut(250, function() {

            const newPage = $(data).filter('.next').html();
            $('.next').html(newPage);

            $('.next').fadeIn(250);
          });
        }
      })

  });

});
