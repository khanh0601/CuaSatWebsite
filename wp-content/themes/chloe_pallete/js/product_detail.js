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

    $('.productdetail_detail_show_txt.seemore').on('click', function() {
    // Xóa active của seemore
    $(this).removeClass('active');
    
    // Thêm active cho compact
    $('.productdetail_detail_show_txt.compact').addClass('active');
    
    // Thêm active cho productdetail_detail_des
    $('.productdetail_detail_des').addClass('active');
  });
  
  // Click vào "Thu gọn"
  $('.productdetail_detail_show_txt.compact').on('click', function() {
    // Xóa active của compact
    $(this).removeClass('active');
    
    // Thêm active cho seemore
    $('.productdetail_detail_show_txt.seemore').addClass('active');
    
    // Xóa active của productdetail_detail_des
    $('.productdetail_detail_des').removeClass('active');
  });