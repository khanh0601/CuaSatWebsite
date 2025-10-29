<?php
/**
 * Taxonomy Template for Dịch Vụ Phân Loại
 *
 * @package WordPress
 * @subpackage chloe_pallete
 * @since chloe_pallete 1.0
 */

    get_header();
    wp_enqueue_style('service-css', get_template_directory_uri() . '/css/service.css');
    wp_enqueue_script('service-js', get_template_directory_uri() . '/js/service.js');

    // Lấy thông tin taxonomy hiện tại
    $current_term = get_queried_object();
?>
    <div class='main' data-barba-namespace="service" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="<?php echo home_url(); ?>" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="<?php echo get_post_type_archive_link('dich-vu'); ?>" class="productdetail_breadcrumb_item">Dịch vụ</a>
                    <a href="<?php echo get_term_link($current_term); ?>" class="productdetail_breadcrumb_item"><?php echo esc_html($current_term->name); ?></a>
                </div>
            </div>
        </section>
        <section class="service_content">
            <div class="kl_container">
                <div class="service_content_title txt_34 txt_title txt_des_border"><?php echo esc_html($current_term->name); ?></div>

                <?php
                // Hiển thị mô tả taxonomy (nếu có)
                if ($current_term->description) {
                    echo '<div class="taxonomy_description">' . wpautop($current_term->description) . '</div>';
                }
                ?>

                <?php
                // Sử dụng main query của WordPress để hỗ trợ phân trang tự động
                global $wp_query;

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $total_pages = $wp_query->max_num_pages;

                // Chỉ hiển thị nếu có bài viết
                if (have_posts()):
                ?>
                <div class="home_news_inner">
                    <div class="home_news_list">
                        <?php while (have_posts()): the_post(); ?>
                            <div class="home_news_list_item">
                                <a href="<?php the_permalink(); ?>" class="home_news_list_item_img_wrap">
                                    <div class="home_news_list_item_img img_full img_abs img_scale">
                                        <div class="home_news_list_item_img_lay"></div>
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('medium'); ?>
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
                        <?php endwhile; ?>
                    </div>
                </div>

                <?php if ($total_pages > 1): ?>
                <div class="home_product_paging">
                    <div class="home_product_paging_page">Page <?php echo $paged; ?>/<?php echo $total_pages; ?></div>

                    <?php
                    $pagination_args = array(
                        'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, $paged),
                        'total'     => $total_pages,
                        'prev_text' => false,
                        'next_text' => false,
                        'type'      => 'array',
                        'mid_size'  => 2,
                        'end_size'  => 1,
                        'add_args'  => false,
                    );

                    $pages = paginate_links($pagination_args);

                    if (is_array($pages)) {
                        // Nút First
                        if ($paged > 1) {
                            echo '<a href="' . esc_url(get_term_link($current_term)) . '" class="home_product_paging_page">First</a>';
                        }

                        // Các số trang
                        foreach ($pages as $page) {
                            if (strpos($page, 'current') !== false) {
                                echo str_replace('page-numbers current', 'home_product_paging_page active', $page);
                            } else {
                                echo str_replace('page-numbers', 'home_product_paging_page', $page);
                            }
                        }

                        // Nút Next và Last
                        if ($paged < $total_pages) {
                            $next_page = get_pagenum_link($paged + 1);
                            $last_page = get_pagenum_link($total_pages);
                            echo '<a href="' . esc_url($next_page) . '" class="home_product_paging_page">Next</a>';
                            echo '<a href="' . esc_url($last_page) . '" class="home_product_paging_page">Last</a>';
                        }
                    }
                    ?>
                </div>
                <?php endif; ?>

                <?php else: ?>
                    <p class="no-posts">Không có dịch vụ nào trong danh mục này.</p>
                <?php endif; ?>

            </div>
        </section>

    </div>
<?php get_footer(); ?>
