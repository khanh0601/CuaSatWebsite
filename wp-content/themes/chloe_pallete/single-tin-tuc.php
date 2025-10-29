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

    // Bắt đầu WordPress Loop
    if (have_posts()) : while (have_posts()) : the_post();
?>
    <div class='main' data-barba-namespace="product_detail" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="<?php echo home_url(); ?>" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="<?php echo get_post_type_archive_link('tin-tuc'); ?>" class="productdetail_breadcrumb_item">Tin tức</a>
                    <?php
                    // Lấy categories của tin tức (nếu có)
                    $categories = get_the_terms(get_the_ID(), 'category');
                    if (!empty($categories) && !is_wp_error($categories)) {
                        $category = $categories[0];
                        echo '<a href="' . esc_url(get_term_link($category)) . '" class="productdetail_breadcrumb_item">' . esc_html($category->name) . '</a>';
                    }
                    ?>
                    <a href="<?php the_permalink(); ?>" class="productdetail_breadcrumb_item"><?php the_title(); ?></a>
                </div>
            </div>
        </section>
        <section class="news_detail_content">
            <div class="kl_container">
                <div class="news_content_title txt_34 txt_title txt_des_border"><?php the_title(); ?></div>
                <div class="news_detail_content_des txt_18">
                    <?php
                    the_content();
                    ?>
                </div>
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
                <div class="home_news_inner swiper">
                <div class="home_news_list swiper-wrapper">
                <?php
                    $args = [
                        'post_type'      => 'tin-tuc',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'post_status'    => 'publish',
                        'post__not_in' => array(get_the_ID()),
                    ];

                    $tin_tuc_query = new WP_Query($args);

                    if ($tin_tuc_query->have_posts()):
                        while ($tin_tuc_query->have_posts()): $tin_tuc_query->the_post();
                        ?>
						<div class="home_news_list_item swiper-slide">
							<a href="<?php the_permalink(); ?>" class="home_news_list_item_img_wrap">
								<div class="home_news_list_item_img img_full img_abs img_scale">
								    <div class="home_news_list_item_img_lay"></div>
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else: ?>
				                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_cuamoi.jpg" alt="<?php the_title(); ?>">
				                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="home_news_list_item_info">
                                <div class="home_news_list_item_time"><?php echo get_the_date('d \t\h\á\n\g m, Y'); ?></div>
                                <a href="<?php the_permalink(); ?>" class="home_news_list_item_title txt_16 txt_bold">
                                    <?php the_title(); ?>
                                </a>
                                <div class="home_news_list_item_des txt_14">
                                    <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="home_news_list_item_link txt_13">Xem Thêm</a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                        else:
                    ?>
                        <p>Không có tin tức nào.</p>
                    <?php endif; ?>

                </div>
            </div>
            <div class="home_product_pagi"></div>
            </div>
        </section>
    </div>
<?php
    endwhile; endif; // Kết thúc WordPress Loop
    get_footer();
?>
