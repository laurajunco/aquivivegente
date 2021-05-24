const circleTag = document.querySelector(".fixed-circle")
const upBtnTag = document.querySelector(".subir")

if (circleTag) {
  document.addEventListener("scroll", function() {
    const pixels = Math.floor(window.pageYOffset)
    circleTag.style.transform = `translate(-50%, -50%) rotate(${pixels/10}deg)`
  })
}

if (upBtnTag) {
  upBtnTag.addEventListener("click", function() {
    window.scrollTo(0, 0);
  })
}


/* VH */
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


/* carrousel */
(function ($, root, undefined) {
  $('.galeria').slick({
    slidesToShow: 3.5,
    initialSlide: 0.5,
    slidesToScroll: 1,
    prevArrow: null,
    nextArrow: $('#objetos-next')
  });

})(jQuery, this);