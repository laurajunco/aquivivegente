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