
const mainScript = () => {
  gsap.registerPlugin(ScrollTrigger);
  $("html").css("scroll-behavior", "auto");
  $("html").css("height", "auto");
  const lenis = new Lenis({
    lerp: 0.15,
    smootth: false
  });
  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
  const viewport = {
    w: window.innerWidth,
    h: window.innerHeight,
  };
  class TriggerSetupHero {
    constructor() { }
    init(play) {
      play();
    }
  }
  class TriggerSetup {
    constructor(triggerEl) {
      this.tlTrigger;
      this.triggerEl = triggerEl;
    }
    setTrigger(setup) {
      if (viewport.w > 767) {
        this.tlTrigger = gsap.timeline({
          scrollTrigger: {
            trigger: this.triggerEl,
            start: "top bottom+=50%",
            end: "bottom top",
            once: true,
            onEnter: () => setup(),
          },
        });
      }
      else {
        setup();
      }
    }
  }
  function isInHeaderCheck(el) {
    const rect = $(el).get(0).getBoundingClientRect();
    const headerRect = $('.header').get(0).getBoundingClientRect();
    if (viewport.w < 768) {
      return (
        rect.bottom >= 0 &&
        rect.top - headerRect.height / 3 <= 0
      );
    }
    else {
      return Math.abs(rect.top - headerRect.top) <= 2;
    }
  }
  class Header extends TriggerSetupHero {
    constructor() {
      super();
      this.tl = null;
      this.init = false;
      this.debounceTimer = null;
      this.timeDebouce = viewport.w > 991 ? 10 : 20;
    }
    trigger() {
      this.setup();
      super.init(this.play.bind(this));
      this.interact();
    }
    setup() {
      this.tl = gsap.timeline();
    }
    play() {
      this.tl.play();
    }
    interact() {
      $('.header_top_right_menu').on('click', function() {
        $('.header').toggleClass('active');
      });
      $('body').on('click', function(e) {
        if(!$(e.target).closest('.header_menu_nav_wrap').length && !$(e.target).closest('.header_top_right_menu').length) {
          $('.header').removeClass('active');
        }
      });
      if(viewport.w < 768) {
        $('.header_menu_nav_item_child_icon').on('click', function(e) {
          e.preventDefault();
          $(this).closest('.header_menu_nav_wrap').toggleClass('active');
          $(this).closest('.header_menu_nav_wrap').find('.header_menu_nav_child').slideToggle();
        });
      }
    }
    toggleColorMode = (color) => {
      let elArr = Array.from($(`[data-section="${color}"]`));
      if (
        elArr.some(function (el) {
          return isInHeaderCheck(el);
        })
      ) {
        $(".header").addClass(`on-${color}`);
      } else if (!$(".header").hasClass("on-show-menu")) {
        $(".header").removeClass(`on-${color}`);

      }
    }
    toggleOnScroll = (inst) => {
      if (inst.scroll > $(".header").height() * (viewport.w > 767 ? 1 : 0.5)) {
        $(".header").addClass("on_scroll");
      } else {
        $(".header").removeClass("on_scroll");
      }
    }
    toggleHide = (inst) => {
      const scrollTop = document.documentElement.scrollTop || window.scrollY
      if ($('.header').hasClass('active')) return;
      const isScrollHeader = scrollTop > $('.header').height() * (viewport.w > 767 ? 5 : 1.5)
      let debounceTimer;

      debounceTimer && clearTimeout(debounceTimer);

      debounceTimer = setTimeout(() => {
        if (isScrollHeader) {
          if (inst.direction >= 1) {
            $('.header').addClass('on_hide');
          } else {
            $('.header').removeClass('on_hide');
          }
        } else {
          $('.header').removeClass('on_hide');
        }
      }, 100);
    }
  }
  const header = new Header();

  class HomeHero extends TriggerSetupHero {
    constructor() {
      super();
      this.tl = null;
    }
    trigger() {
      this.setup();
      super.init(this.play.bind(this));
    }
    setup() {
      // var swiper = new Swiper(".home_slider_inner", {
      //   slidesPerView: 1,
      //   spaceBetween: 0,
      //   effect: "fade",
      //   loop: true,
      //   pagination: {
      //     el: ".home_hero_pagination",
      //     clickable: true,
      //   },
      // });
      var swiper1 = new Swiper(".home_news_inner", {
        slidesPerView: 1,
        spaceBetween: parseRem(30),
        pagination: {
          el: '.home_news .home_product_pagi',
          bulletClass: 'home_product_pagi_item',
          bulletActiveClass: 'active',
          clickable: true, 
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          }
        }
      });
      if(viewport.w < 768) {
        $('.home_service_list_wrap').addClass('swiper')
        $('.home_service_list').addClass('swiper-wrapper')
        $('.home_service_list_item').addClass('swiper-slide')
        var swiperHomeService = new Swiper(".home_service_list_wrap", {
          slidesPerView: 2,
          spaceBetween: 16,
          pagination: {
            el: '.home_service .home_product_pagi',
            bulletClass: 'home_product_pagi_item',
            bulletActiveClass: 'active',
            clickable: true, 
          },
        });
      }
      var swiper2 = new Swiper(".home_partner_inner", {
        slidesPerView: 2,
        spaceBetween: parseRem(20),
        breakpoints: {
          768: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
          1024: {
            slidesPerView: 6,
            spaceBetween: 20,
          }
        }
      });
      $('[class*="home_product_swiper_"]').each(function (index, element) {
        var $this = $(element);

        // Lấy category ID từ class name
        var classList = $this.attr('class').split(' ');
        var swiperClass = classList.find(function (cls) {
          return cls.startsWith('home_product_swiper_');
        });
        var categoryId = swiperClass.replace('home_product_swiper_', '');
        var $container = $(`.${swiperClass}`).closest('.home_product_list');
        if($(`.${swiperClass}`).find('.home_product_list_card_item').length <5) {
          $container.find('.home_product_control').hide();
          $container.find('.home_product_pagi').hide();
        }

        new Swiper('.' + swiperClass, {
          slidesPerView: 2,
          spaceBetween: parseRem(12),
          navigation: {
            nextEl: $container.find('.home_product_control_item.next')[0],
            prevEl: $container.find('.home_product_control_item.prev')[0],
          },
          pagination: {
            el: $container.find('.home_product_pagi')[0],
            bulletClass: 'home_product_pagi_item',
            bulletActiveClass: 'active',
            clickable: true, 
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 30,
            },
          }
        });
      });
      this.tl = gsap.timeline();
      $('.home_product_list_card_item_sub').on('click', function() {
        $('.home_form').addClass('active');
      });
      $('.home_form_content_close').on('click', function() {
        $('.home_form').removeClass('active');
      });
      
    }
    play() {
      this.tl.play();
    }
  }
  const homeHero = new HomeHero();
  const SCRIPT = {
    homeScript: () => {
      console.log('homeScript');
      homeHero.trigger();
      return;
    },
  };
  function animationGlobal() {
    header.trigger();
    const pageName = $(".main").attr("data-barba-namespace");
    if (pageName) {
      SCRIPT[`${pageName}Script`]();
    }
    lenis.on("scroll", function (inst) {
      header.toggleOnScroll(lenis);
      header.toggleHide(inst);
      ScrollTrigger.refresh();

    });
  }
  if (window.scrollY > 0) {
    lenis.scrollTo("top", {
      duration: .001,
      onComplete: () => animationGlobal()
    });
  }
  else {
    animationGlobal();
  }
};
window.onload = mainScript;

