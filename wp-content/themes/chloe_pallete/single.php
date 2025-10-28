<?php
/**
 * The Template for displaying all single posts.
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
                    <a href="<?php echo home_url(); ?>" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="<?php echo get_post_type_archive_link('post'); ?>" class="productdetail_breadcrumb_item">Sản Phẩm</a>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        $category = $categories[0];
                        echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="productdetail_breadcrumb_item">' . esc_html($category->name) . '</a>';
                    }
                    ?>
                    <a href="<?php echo get_permalink(); ?>" class="productdetail_breadcrumb_item"><?php echo get_the_title(); ?></a>
                </div>
            </div>
        </section>
        <section class="productdetail_info">
            <div class="kl_container">
                <div class="productdetail_info_inner">
                    <div class="productdetail_info_left">
                        <?php
                        $gallery_images = get_field('hinh_anh');
                        if ($gallery_images) :
                        ?>
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper productdetail_info_left_list">
                                <?php foreach ($gallery_images as $image) : ?>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                                <!-- <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div> -->
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                           <div class="swiper-wrapper productdetail_info_left_list">
                                <?php foreach ($gallery_images as $image) : ?>
                                <div class="productdetail_info_left_list_item swiper-slide img_full">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="productdetail_info_right">
                        <div class="productdetail_info_right_title txt_title txt_25"><?php get_the_title(); ?></div>
                        <!-- <div class="productdetail_info_right_social">
                            <a href="#" class="productdetail_info_right_social_item img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_plus.svg" alt="">
                            </a>
                            <a href="#" class="productdetail_info_right_social_item img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_fb.svg" alt="">
                            </a>
                            <a href="#" class="productdetail_info_right_social_item img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_twist.svg" alt="">
                            </a>
                            <a href="#" class="productdetail_info_right_social_item img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_message.svg" alt="">
                            </a>
                            <a href="#" class="productdetail_info_right_social_item img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_copy.svg" alt="">
                            </a>
                        </div> -->
                        <div class="productdetail_info_right_view">
                            <div class="productdetail_info_right_view_icon svg_full">
                                <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.42012 12.7132C2.28394 12.4975 2.21584 12.3897 2.17772 12.2234C2.14909 12.0985 2.14909 11.9015 2.17772 11.7766C2.21584 11.6103 2.28394 11.5025 2.42012 11.2868C3.54553 9.50484 6.8954 5 12.0004 5C17.1054 5 20.4553 9.50484 21.5807 11.2868C21.7169 11.5025 21.785 11.6103 21.8231 11.7766C21.8517 11.9015 21.8517 12.0985 21.8231 12.2234C21.785 12.3897 21.7169 12.4975 21.5807 12.7132C20.4553 14.4952 17.1054 19 12.0004 19C6.8954 19 3.54553 14.4952 2.42012 12.7132Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.0004 15C13.6573 15 15.0004 13.6569 15.0004 12C15.0004 10.3431 13.6573 9 12.0004 9C10.3435 9 9.0004 10.3431 9.0004 12C9.0004 13.6569 10.3435 15 12.0004 15Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div><div class="productdetail_info_right_view_amount txt_14">52</div>
                        </div>
                        <div class="productdetail_info_right_price">
                            <div class="productdetail_info_right_price_title txt_16 txt_wh_500">Giá bán:</div>
                            <div class="productdetail_info_right_price_contact txt_20 txt_bold">Liên hệ</div>
                        </div>
                        <?php $mo_ta_ngan = get_field('mo_ta_ngan'); ?>
                        <div class="productdetail_info_right_des"><?php echo $mo_ta_ngan; ?></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="productdetail_detail">
            <div class="kl_container">
                <div class="productdetail_detail_title txt_uppercase txt_17">Thông tin về sản phẩm</div>
                <div class="productdetail_detail_des">
                    <div class="productdetail_detail_des_img">
                        <?php $content = get_the_content(); ?>
                        <?php echo $content; ?>
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
                <div class="home_product_list_wrap swiper home_product_swiper">
					            <div class="home_product_list_card swiper-wrapper">
                                <?php
                                // Lấy categories của sản phẩm hiện tại
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    $category_ids = array();
                                    foreach($categories as $category) {
                                        $category_ids[] = $category->term_id;
                                    }

                                    // Query các bài viết cùng category, loại trừ bài hiện tại
                                    $related_posts = new WP_Query(array(
                                        'category__in' => $category_ids,
                                        'post__not_in' => array(get_the_ID()),
                                        'posts_per_page' => 6,
                                        'orderby' => 'rand'
                                    ));

                                    if ($related_posts->have_posts()) :
                                        while ($related_posts->have_posts()) : $related_posts->the_post();
                                ?>
                                        <div class="home_product_list_card_item swiper-slide">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="<?php echo get_permalink(); ?>" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="<?php echo get_the_title(); ?>">
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="<?php echo get_permalink(); ?>" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    <?php echo get_the_title(); ?>
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '…'); ?>
                                                </div>
                                                <div class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                }
                                ?>
                                </div>
                            </div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>
