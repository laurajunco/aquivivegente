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
    window.scrollTo({top: 0,behavior: "smooth"});
    console.log("up")
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


/* BARBA */
barba.use(barbaCss)

barba.init({
  transitions: [
    {
      name: "fade",
      beforeLeave({ current, next, trigger })  {
        scrolltop()
        selectNav(next)
      }
    }
  ]
})

const scrolltop = () => {
  window.scrollTo({top: 0})
}

const selectNav = (next) => {
  const headerLinks = document.querySelectorAll(".menu .menu-item a")
  const href = next.url.href
  headerLinks.forEach(link => {
    if(link.getAttribute("href") === href) {
      link.parentNode.classList.add("current-menu-item")
    } else {
      link.parentNode.classList.remove("current-menu-item")
    }
  })
}