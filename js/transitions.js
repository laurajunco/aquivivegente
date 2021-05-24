/* BARBA */
const bodyTag = document.querySelector("body")
const cardsTag = document.querySelector("cards")

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
  ],
  views: [
    {
      namespace: "single",
      beforeEnter() {
        bodyTag.classList.add("single");
        bodyTag.classList.remove("blog");
      },
      beforeLeave() {
        bodyTag.classList.remove("single");
        bodyTag.classList.add("blog");
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