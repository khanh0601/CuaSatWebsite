<?php
    get_header();
    wp_enqueue_style('product-css', get_template_directory_uri() . '/css/product.css');
    wp_enqueue_script('product-js', get_template_directory_uri() . '/js/product.js');
    $pageID = get_queried_object_id();
    $cate = get_queried_object();
?>
    <div class='main' data-barba-namespace="product" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="<?php echo home_url(); ?>" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="<?php echo home_url('/san-pham'); ?>" class="productdetail_breadcrumb_item">Sản phẩm</a>
                    <?php if (is_category() && $cate): ?>
                        <a href="<?php echo get_category_link($cate->term_id); ?>" class="productdetail_breadcrumb_item"><?php echo esc_html($cate->name); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="product_content">
            <div class="kl_container">
                <div class="product_content_title txt_34 txt_title txt_des_border"><?php echo is_category() && $cate ? esc_html($cate->name) : 'Sản phẩm'; ?></div>
                <div class="product_content_inner">
                    <?php
                    // Sử dụng main query của WordPress để hỗ trợ phân trang tự động
                    global $wp_query;

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $total_pages = $wp_query->max_num_pages;

                    // Chỉ hiển thị nếu có bài viết
                    if (have_posts()):
                    ?>
                        <div class="home_product_list">
                            <div class="home_product_list_wrap">
                                <div class="home_product_list_card">
                                    <?php while (have_posts()): the_post(); ?>
                                        <div class="home_product_list_card_item">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="<?php the_permalink(); ?>" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <?php the_post_thumbnail('full'); ?>
                                                    <?php else: ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="">
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="<?php the_permalink(); ?>" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    <?php the_title(); ?>
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                                </div>
                                                <a href="#" target="__blank" class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                    </a>
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
                                            echo '<a href="' . get_category_link($cate->term_id) . '" class="home_product_paging_page">First</a>';
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
                                            echo '<a href="' . $next_page . '" class="home_product_paging_page">Next</a>';
                                            echo '<a href="' . $last_page . '" class="home_product_paging_page">Last</a>';
                                        }
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif;?>
                    <div class="product_content_category">
                         <?php
                        // Lấy repeater field của category hiện tại
                        if (have_rows('link-group', $cate)):
                            while (have_rows('link-group', $cate)): the_row();
                                $title = get_sub_field('title');
                                $link = get_sub_field('link');
                                ?>
                                <a href="<?php echo esc_url($link); ?>" class="product_content_category_item">
                                    <?php echo esc_html($title); ?>
                                </a>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                
            </div>
        </section>

    </div>
<?php get_footer(); ?>
