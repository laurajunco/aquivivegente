(function ($, root, undefined) {
  const runScripts = () => {

    const circleTag = document.querySelector(".fixed-circle")
    const upBtnTag = document.querySelector(".subir")
    const navBarTag = document.querySelector(".site-branding-mobile")

    /* menu mobile */
    let prevScrollpos = window.pageYOffset;
    window.onscroll = () => {
      const currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        navBarTag.style.top = "0";
      } else {
        navBarTag.style.top = "-60px";
      }
      prevScrollpos = currentScrollPos;
    }
 
    /* Modal */
    $('.open-modal').on('click', function() {
      $('.modal-img-content').html($(this).html());  
      $('footer').hide();
      $('.modal-img').show();
      $('html').css('overflow', 'hidden');
      return false;
    })

    $('.open-modal-obj').on('click', function() {
      $('.modal-img-content').html($(this).find("img")[0]);  
      $('.modal-img').show();
      $('footer').hide();
      $('html').css('overflow', 'hidden');
      return false;
    })

    $('.modal-img-close, .modal-img-background, .modal-img-content').on('click', function() {
      $('.modal-img').hide();
      $('footer').show();
      $('html').css('overflow', 'auto');
      return false;
    })

    /* Circulo odeón */
    if (circleTag) {
      document.addEventListener("scroll", function() {
        const pixels = Math.floor(window.pageYOffset)
        circleTag.style.transform = `translate(-50%, -50%) rotate(${pixels/10}deg)`
      })
    }
    
    /* Subir */
    if (upBtnTag) {
      upBtnTag.addEventListener("click", function() {
        window.scrollTo({top: 0,behavior: "smooth"});
      })
    }
    
    /* VH */
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    
    window.addEventListener('resize', () => {
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
    
    /* galeria carrousel */
    $('.galeria').slick({
      slidesToShow: 3.5,
      slidesToScroll: 1,
      prevArrow: $('#objetos-prev'),
      nextArrow: $('#objetos-next'),
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2.5,
          }
        }
      ]
    });

    $('.galeria').on('mousewheel', function(e) {
      const deltaX = e.originalEvent.deltaX
      if (deltaX > 10) {
        $('.galeria').slick('slickNext');
      } else if (deltaX < -10){
        $('.galeria').slick('slickPrev');
      }
    });

    /* subir la gente */
    $('.la-gente-galeria').on('init', function() {
      const slickClones = document.querySelectorAll(".slick-slide")
      slickClones.forEach(clone => {
        const grupo = clone.querySelector(".grupo")
        const subirTag = clone.querySelector(".subir-gente")

        subirTag.addEventListener("click", () => {
          grupo.scrollTo({top: 0,behavior: "smooth"});
        })
      })
    });

    /* la gente carrousel */
    $('.la-gente-galeria').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      swipe: true, 
      touchMove: true,
      prevArrow: $('.left-arrow-la-gente'),
      nextArrow: $('.right-arrow-la-gente'),
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
          }
        }
      ]
    });

    $('.la-gente-galeria').on('mousewheel', function(e) {
      const deltaX = e.originalEvent.deltaX
      if (deltaX > 10) {
        $('.la-gente-galeria').slick('slickNext');
      } else if (deltaX < -10){
        $('.la-gente-galeria').slick('slickPrev');
      }
    });
  }

  runScripts()

  /* BARBA */
  const bodyTag = document.querySelector("body")

  barba.use(barbaCss)

  barba.init({
    transitions: [
      {
        name: "fade",
        afterEnter() {
          runScripts()
          scrolltop()
        },
        beforeLeave({next})  {
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
    window.scrollTo({top: 0, behavior:"smooth"})
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

})(jQuery, this);  

