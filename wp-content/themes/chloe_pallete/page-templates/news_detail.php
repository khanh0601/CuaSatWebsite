<?php
    /**
     * Template Name: Chi tiết tin tức
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('news_detail-css', get_template_directory_uri() . '/css/news_detail.css');
    wp_enqueue_script('news_detail-js', get_template_directory_uri() . '/js/news_detail.js');

?>
    <div class='main' data-barba-namespace="product_detail" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="#" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="#" class="productdetail_breadcrumb_item">Tin tức</a>
                    <a href="#" class="productdetail_breadcrumb_item">Sửa Cửa Kính Văn Phòng - Sửa Cửa Kính HCM</a>
                </div>
            </div>
        </section>
        <section class="news_detail_content">
            <div class="kl_container">
                <div class="news_content_title txt_34 txt_title txt_des_border">Tin tức</div>
                <div class="news_detail_content_des"></div>
            </div>
        </section>
        <section class="about_share">
            <div class="kl_container">
                <div class="about_share_inner">
                    <div class="about_share_txt txt_bold">Chia sẻ</div>
                    <div class="productdetail_info_right_social">
                        <!-- <?php if (!empty($about_share)) : ?>
                            <?php foreach ($about_share as $item): ?>
                                <a href="#" class="productdetail_info_right_social_item img_full">
                                        <img src="<?= esc_url(wp_get_attachment_url($item['img'])) ?>" alt="">
                                </a>
                            <?php endforeach; ?>
                      <?php endif; ?> -->
                      <a href="#" class="productdetail_info_right_social_item img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_plus.svg" alt="">
                        </a>
                        <a href="#" class="productdetail_info_right_social_item icon_fb img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_fb.svg" alt="">
                        </a>
                        <a href="#" class="productdetail_info_right_social_item icon_twist img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_twist.svg" alt="">
                        </a>
                        <a href="#" class="productdetail_info_right_social_item icon_message img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_message.svg" alt="">
                        </a>
                        <a href="#" class="productdetail_info_right_social_item icon_copy img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_copy.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="productdetail_relate">
            <div class="kl_container">
                <div class="news_content_title txt_34 txt_title txt_des_border">Bài viết liên quan</div>
                <div class="home_product_list_wrap swiper home_product_swiper">
					            <div class="home_product_list_card swiper-wrapper">
                                        <div class="home_product_list_card_item swiper-slide">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="#" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="#" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    Cửa kéo đài loan
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    Với nhiều năm kinh nghiệm trong ngành cơ khí, thợ hàn sắt tại Bình Thạnh của Cơ Khí Tổng Hợp Nguyễn Hải luôn sẵn…
                                                </div>
                                                <div class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                </div>
                                            </div>
                                        </div>
                                         <div class="home_product_list_card_item swiper-slide">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="#" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="#" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    Cửa kéo đài loan
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    Với nhiều năm kinh nghiệm trong ngành cơ khí, thợ hàn sắt tại Bình Thạnh của Cơ Khí Tổng Hợp Nguyễn Hải luôn sẵn…
                                                </div>
                                                <div class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                </div>
                                            </div>
                                        </div>
                                         <div class="home_product_list_card_item swiper-slide">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="#" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="#" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    Cửa kéo đài loan
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    Với nhiều năm kinh nghiệm trong ngành cơ khí, thợ hàn sắt tại Bình Thạnh của Cơ Khí Tổng Hợp Nguyễn Hải luôn sẵn…
                                                </div>
                                                <div class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                </div>
                                            </div>
                                        </div>
                                         <div class="home_product_list_card_item swiper-slide">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="#" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="#" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    Cửa kéo đài loan
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    Với nhiều năm kinh nghiệm trong ngành cơ khí, thợ hàn sắt tại Bình Thạnh của Cơ Khí Tổng Hợp Nguyễn Hải luôn sẵn…
                                                </div>
                                                <div class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                </div>
                                            </div>
                                        </div>
                                         <div class="home_product_list_card_item swiper-slide">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="#" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="#" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    Cửa kéo đài loan
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    Với nhiều năm kinh nghiệm trong ngành cơ khí, thợ hàn sắt tại Bình Thạnh của Cơ Khí Tổng Hợp Nguyễn Hải luôn sẵn…
                                                </div>
                                                <div class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
