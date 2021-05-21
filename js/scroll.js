const circleTag = document.querySelector(".fixed-circle")

if (circleTag) {
  document.addEventListener("scroll", function() {
    const pixels = Math.floor(window.pageYOffset)
    circleTag.style.transform = `translate(-50%, -50%) rotate(${pixels/10}deg)`
  })
}