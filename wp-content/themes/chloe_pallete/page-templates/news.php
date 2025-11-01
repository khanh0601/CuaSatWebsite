<?php
    /**
     * Template Name: Tin tức
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('news-css', get_template_directory_uri() . '/css/news.css');
    wp_enqueue_script('news-js', get_template_directory_uri() . '/js/news.js');
    $pageID = get_queried_object_id();
    $news_title = tr_posts_field('news_title', $pageID);
?>
    <div class='main' data-barba-namespace="product" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="/" class="productdetail_breadcrumb_item">Trang chủ</a>
                        <a href="/tin-tuc" class="productdetail_breadcrumb_item">Tin tức</a>
                </div>
            </div>
        </section>
        <section class="news_content">
            <div class="kl_container">
                <div class="news_content_title txt_34 txt_title txt_des_border"><?= wp_kses_post($news_title) ?></div>
                <div class="home_news_inner">
                    <div class="home_news_list">
                        <div class="home_news_list_inner">
                            <?php
                                $args = [
                                    'post_type'      => 'tin-tuc',
                                    'posts_per_page' => -1,
                                    'orderby'        => 'date',
                                    'order'          => 'DESC',
                                    'post_status'    => 'publish',
                                ];

                                $tin_tuc_query = new WP_Query($args);

                                $featured_posts = [];
                                $normal_posts = [];

                                // Phân loại bài viết
                                if ($tin_tuc_query->have_posts()):
                                    while ($tin_tuc_query->have_posts()): $tin_tuc_query->the_post();
                                        
                                        if (get_field('bai-viet-noi-bat')):
                                            $featured_posts[] = get_the_ID();
                                        else:
                                            $normal_posts[] = get_the_ID();
                                        endif;
                                    endwhile;
                                    wp_reset_postdata();
                                endif;

                            if (!empty($featured_posts)):
                                $featured_args = [
                                    'post_type'      => 'tin-tuc',
                                    'post__in'       => $featured_posts,
                                    'orderby'        => 'post__in',
                                    'posts_per_page' => -1,
                                ];
                                $featured_query = new WP_Query($featured_args);
                                
                                if ($featured_query->have_posts()):
                                while ($featured_query->have_posts()): $featured_query->the_post();
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
                                endif;
                                else:
                            ?>
                                <p>Không có tin tức nào.</p>
                            <?php endif; ?>

                        </div>
                        <div class="home_news_list_pagi"></div>
                    </div>
                    <div class="home_news_card">
                        <?php if (!empty($normal_posts)):
                        $normal_args = [
                            'post_type'      => 'tin-tuc',
                            'post__in'       => $normal_posts,
                            'orderby'        => 'post__in',
                            'posts_per_page' => -1,
                        ];
                        $normal_query = new WP_Query($normal_args);
                        
                        if ($normal_query->have_posts()):
                            while ($normal_query->have_posts()): $normal_query->the_post();
                                ?>
                        <div class="home_news_card_item">
                            <a href="<?php the_permalink(); ?>" class="home_news_card_item_img_wrap img_full">
                               <div class="home_news_card_item_img img_full img_abs img_scale">
                                    <div class="home_news_card_item_img_lay"></div>
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_cuamoi.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                            </a>
                            <div class="home_news_card_item_info">
                                <!-- <div class="home_news_list_item_time"><?php echo get_the_date('d \t\h\á\n\g m, Y'); ?></div> -->
                                <a href="<?php the_permalink(); ?>" class="home_news_card_item_info_title txt_14 txt_bold">
                                    <?php the_title(); ?>
                                </a>
                                <div class="home_news_card_item_info_des txt_14">
                                    <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                                </div>
                                <!-- <a href="<?php the_permalink(); ?>" class="home_news_card_item_info_link txt_13">Xem Thêm</a> -->
                            </div>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                            endif;
                            else:
                        ?>
                            <p>Không có tin tức nào.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="home_news_list_paging"></div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>
