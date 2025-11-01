if(viewport.w < 768) {
        $('.home_news_list').addClass('swiper')
        $('.home_news_list_inner').addClass('swiper-wrapper')
        $('.home_news_list_item').addClass('swiper-slide')
        var swiperHomeService = new Swiper(".home_news_list", {
          slidesPerView: 1,
          spaceBetween: parseRem(10),
          pagination: {
            el: '.home_news_list_pagi',
            // bulletClass: 'home_product_pagi_item',
            // bulletActiveClass: 'active',
            clickable: true, 
          },
        });
      }