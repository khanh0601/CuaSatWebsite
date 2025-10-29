var swiper3 = new Swiper('.home_product_list_wrap', {
    slidesPerView: 2,
    spaceBetween: parseRem(12),
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