const circleTag = document.querySelector(".fixed-circle")

// rotacion odeon
document.addEventListener("scroll", function() {
  const pixels = Math.floor(window.pageYOffset)
  circleTag.style.transform = `translate(-50%, -50%) rotate(${pixels/25}deg)`
})