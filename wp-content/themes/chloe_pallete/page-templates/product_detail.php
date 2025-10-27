<?php
    /**
     * Template Name: Product detail
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('product_detail-css', get_template_directory_uri() . '/css/product_detail.css');
    wp_enqueue_script('product_detail-js', get_template_directory_uri() . '/js/product_detail.js');

?>
    <div class='main' data-barba-namespace="product_detail">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="#" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="#" class="productdetail_breadcrumb_item">Sản Phẩm</a>
                    <a href="#" class="productdetail_breadcrumb_item">SỬA CỬA KÉO </a>
                    <a href="#" class="productdetail_breadcrumb_item">cơ khí tổng hơp tai gò vấp</a>
                </div>
            </div>
        </section>
        <section class="productdetail_info">
            <div class="kl_container">
                <div class="productdetail_info_inner">
                    <div class="productdetail_info_left">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper productdetail_info_left_list">
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info1.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info2.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info3.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info4.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info5.jpg" alt="" />
                                </div>
                            </div>
                                <!-- <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div> -->
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                           <div class="swiper-wrapper productdetail_info_left_list">
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info1.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info2.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info3.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info4.jpg" alt="" />
                                </div>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product_detail_info5.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="productdetail_info_right">
                        <div class="productdetail_info_right_title txt_title txt_25">Cơ khí tổng hơp tai gò vấp</div>
                        <div class="productdetail_info_right_social">
                            <a href="#" class="productdetail_info_right_social_item svg_full">
                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#fff"><path d="M14 7h4v18h-4z"></path><path d="M7 14h18v4H7z"></path></g></svg>
                            </a>
                            <a href="#" class="productdetail_info_right_social_item svg_full">
                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M28 16c0-6.627-5.373-12-12-12S4 9.373 4 16c0 5.628 3.875 10.35 9.101 11.647v-7.98h-2.474V16H13.1v-1.58c0-4.085 1.849-5.978 5.859-5.978.76 0 2.072.15 2.608.298v3.325c-.283-.03-.775-.045-1.386-.045-1.967 0-2.728.745-2.728 2.683V16h3.92l-.673 3.667h-3.247v8.245C23.395 27.195 28 22.135 28 16"></path></svg>
                            </a>
                            <a href="#" class="productdetail_info_right_social_item svg_full">
                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M28 8.557a10 10 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.7 9.7 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.94 4.94 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a5 5 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174q-.476-.001-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.9 9.9 0 0 1-6.114 2.107q-.597 0-1.175-.068a13.95 13.95 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013q0-.32-.015-.637c.96-.695 1.795-1.56 2.455-2.55z"></path></svg>
                            </a>
                            <a href="#" class="productdetail_info_right_social_item svg_full">
                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M16 5C9.986 5 5.11 9.56 5.11 15.182c0 3.2 1.58 6.054 4.046 7.92V27l3.716-2.06c.99.276 2.04.425 3.128.425 6.014 0 10.89-4.56 10.89-10.183S22.013 5 16 5m1.147 13.655L14.33 15.73l-5.423 3 5.946-6.31 2.816 2.925 5.42-3-5.946 6.31z"></path></svg>
                            </a>
                            <a href="#" class="productdetail_info_right_social_item svg_full">
                                <svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#fff" d="M7.591 21.177q0-.54.377-.917l2.804-2.804a1.24 1.24 0 0 1 .913-.378q.565 0 .97.43-.038.041-.255.25-.215.21-.29.29a3 3 0 0 0-.2.256 1.1 1.1 0 0 0-.177.344 1.4 1.4 0 0 0-.046.37q0 .54.377.918a1.25 1.25 0 0 0 .918.377q.19.001.373-.047.189-.056.345-.175.135-.09.256-.2.15-.14.29-.29c.14-.142.223-.23.25-.254q.445.42.445.984 0 .539-.377.916l-2.778 2.79a1.24 1.24 0 0 1-.917.364q-.54-.001-.917-.35l-1.982-1.97a1.22 1.22 0 0 1-.378-.9zm9.477-9.504q0-.54.377-.917l2.777-2.79a1.24 1.24 0 0 1 .913-.378q.525-.001.917.364l1.984 1.968q.38.378.38.903 0 .54-.38.917l-2.802 2.804a1.24 1.24 0 0 1-.916.364q-.565 0-.97-.418.038-.04.255-.25a8 8 0 0 0 .29-.29q.108-.12.2-.255.121-.156.176-.344.048-.181.047-.37 0-.538-.377-.914a1.25 1.25 0 0 0-.917-.377q-.205 0-.37.046-.172.046-.346.175a4 4 0 0 0-.256.2q-.08.076-.29.29l-.25.258q-.441-.417-.442-.983zM5.003 21.177q0 1.617 1.146 2.736l1.982 1.968c.745.75 1.658 1.12 2.736 1.12q1.63 0 2.75-1.143l2.777-2.79c.75-.747 1.12-1.66 1.12-2.737q.002-1.66-1.183-2.818l1.186-1.185q1.16 1.185 2.805 1.186 1.617 0 2.75-1.13l2.803-2.81q1.127-1.132 1.128-2.748 0-1.62-1.146-2.738L23.875 6.12Q22.758 4.999 21.139 5q-1.63 0-2.75 1.146l-2.777 2.79c-.75.747-1.12 1.66-1.12 2.737q-.002 1.658 1.183 2.817l-1.186 1.186q-1.16-1.186-2.805-1.186-1.617 0-2.75 1.132L6.13 18.426Q5 19.559 5 21.176z"></path></svg>
                            </a>
                        </div>
                        <div class="productdetail_info_right_view">
                            <div class="productdetail_info_right_view_icon svg_full">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.42012 12.7132C2.28394 12.4975 2.21584 12.3897 2.17772 12.2234C2.14909 12.0985 2.14909 11.9015 2.17772 11.7766C2.21584 11.6103 2.28394 11.5025 2.42012 11.2868C3.54553 9.50484 6.8954 5 12.0004 5C17.1054 5 20.4553 9.50484 21.5807 11.2868C21.7169 11.5025 21.785 11.6103 21.8231 11.7766C21.8517 11.9015 21.8517 12.0985 21.8231 12.2234C21.785 12.3897 21.7169 12.4975 21.5807 12.7132C20.4553 14.4952 17.1054 19 12.0004 19C6.8954 19 3.54553 14.4952 2.42012 12.7132Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.0004 15C13.6573 15 15.0004 13.6569 15.0004 12C15.0004 10.3431 13.6573 9 12.0004 9C10.3435 9 9.0004 10.3431 9.0004 12C9.0004 13.6569 10.3435 15 12.0004 15Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div><div class="productdetail_info_right_view_amount txt_14">52</div>
                        </div>
                        <div class="productdetail_info_right_price">
                            <div class="productdetail_info_right_price_title txt_16 txt_wh_500">Giá bán:</div>
                            <div class="productdetail_info_right_price_contact txt_20 txt_bold">Liên hệ</div>
                        </div>
                        <div class="productdetail_info_right_des">Cơ khí Tổng Hợp chuyên sửa chữa cửa sắt tại nhà TPHCM, liên hệ 0943279803 Mr.Hải . Sữa cửa sắt khó đóng mở, gẫy bản lề, cửa sệ , cửa kéo thay bạc đạn, bị kẹt, sửa cửa cuốn. </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="productdetail_detail">
            <div class="kl_container">
                <div class="productdetail_detail_title txt_uppercase txt_17">Thông tin về sản phẩm</div>
                <div class="productdetail_detail_des">
                    <div class="productdetail_detail_des_img txt_center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/product_content.jpg" alt="">
                    </div>
                </div>
                <div class="productdetail_detail_show">
                    <div class="productdetail_detail_show_txt seemore active">
                        <div class="productdetail_detail_show_txt_wrap">
                            <div class="productdetail_detail_show_txt_inner">
                                Xem thêm
                            </div>
                            <div class="productdetail_detail_show_txt_icon svg_full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                     <div class="productdetail_detail_show_txt compact">
                        <div class="productdetail_detail_show_txt_wrap">
                            <div class="productdetail_detail_show_txt_inner">
                                Thu gọn
                            </div>
                            <div class="productdetail_detail_show_txt_icon svg_full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none">
                                    <path d="M5 7.5L10 12.5L15 7.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="productdetail_relate">
            <div class="kl_container">
                <div class="productdetail_detail_title txt_uppercase txt_17">Sản phẩm cùng loại</div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>
