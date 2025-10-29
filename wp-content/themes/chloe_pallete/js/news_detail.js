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