var swiper = new Swiper(".mySwiper", {
      loop: false,
      spaceBetween: parseRem(10),
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
      autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            // pauseOnMouseEnter: true
        },
    });
    var swiper2 = new Swiper(".mySwiper2", {
        slidesPerView: 1,
      loop: false,
      spaceBetween: 0,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      effect: "fade",
      thumbs: {
        swiper: swiper,
      },
      autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            // pauseOnMouseEnter: true
        },
    });