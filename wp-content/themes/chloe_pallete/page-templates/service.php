<?php
    /**
     * Template Name: Dịch vụ
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('service-css', get_template_directory_uri() . '/css/service.css');
    wp_enqueue_script('service-js', get_template_directory_uri() . '/js/service.js');
    $pageID = get_queried_object_id();
    $service_title = tr_posts_field('service_title', $pageID);
?>
    <div class='main' data-barba-namespace="service" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="#" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="#" class="productdetail_breadcrumb_item">Dịch vụ</a>
                </div>
            </div>
        </section>
        <section class="service_content">
            <div class="kl_container">
                <div class="service_content_title txt_34 txt_title txt_des_border"><?= wp_kses_post($service_title) ?></div>
                <div class="home_news_inner">
                <div class="home_news_list">
                <?php
                    $args = [
                        'post_type'      => 'dich-vu',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'post_status'    => 'publish',
                    ];

                    $tin_tuc_query = new WP_Query($args);

                    if ($tin_tuc_query->have_posts()):
                        while ($tin_tuc_query->have_posts()): $tin_tuc_query->the_post();
                        ?>
						<div class="home_news_list_item">
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
                        <p>Không có dịch vụ nào.</p>
                        <?php endif; ?>
                </div>
            </div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>
