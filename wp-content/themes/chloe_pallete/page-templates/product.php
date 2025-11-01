<?php
    /**
     * Template Name: Sản phẩm
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('product-css', get_template_directory_uri() . '/css/product.css');
    wp_enqueue_script('product-js', get_template_directory_uri() . '/js/product.js');
    $pageID = get_queried_object_id();
    $product_title = tr_posts_field('product_title', $pageID);
    $product_items = tr_posts_field('product_items', $pageID);
?>
    <div class='main' data-barba-namespace="product" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="#" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="#" class="productdetail_breadcrumb_item">Sản phẩm</a>
                </div>
            </div>
        </section>
        <section class="product_content">
            <div class="kl_container">
                <div class="product_content_title txt_34 txt_title txt_des_border"><?= wp_kses_post($product_title) ?></div>
                <div class="product_content_inner">
                    <?php
                    // Lấy tất cả bài viết
                    $posts = get_posts([
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'post_type'      => 'post',
                    ]);

                    // Chỉ hiển thị nếu có bài viết
                    if (! empty($posts)):
                    ?>
                        <div class="home_product_list">
                            <div class="home_product_list_wrap ">
                                <div class="home_product_list_card">
                                    <?php foreach ($posts as $post): setup_postdata($post); ?>
                                        <div class="home_product_list_card_item">
                                            <div class="home_product_list_card_item_img_wrap">
                                                <a href="<?php echo get_permalink($post->ID); ?>" class="home_product_list_card_item_img img_scale img_full img_abs">
                                                    <div class="home_product_list_card_item_img_overlay"></div>
                                                    <?php if (has_post_thumbnail($post->ID)): ?>
                                                        <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
                                                    <?php else: ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_hansat.jpg" alt="">
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="home_product_list_card_item_info">
                                                <a href="<?php echo get_permalink($post->ID); ?>" class="home_product_list_card_item_title txt_16 txt_bold txt_uppercase txt_center">
                                                    <?php echo get_the_title($post->ID); ?>
                                                </a>
                                                <div class="home_product_list_card_item_des txt_center">
                                                    <?php echo wp_trim_words(get_the_excerpt($post->ID), 20); ?>
                                                </div>
                                                <a href="#" target="__blank" class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                                    Đăng ký nhận báo giá
                                                    </a>
                                            </div>
                                        </div>
                                    <?php endforeach;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <div class="home_product_paging">
                                <div class="home_product_paging_page">Page 1/3</div>
                                <a href="#" class="home_product_paging_page">First</a>
                                <a href="#" class="home_product_paging_page">1</a>
                                <a href="#" class="home_product_paging_page">2</a>
                                <a href="#" class="home_product_paging_page">3</a>
                                <a href="#" class="home_product_paging_page">Next</a>
                                <a href="#" class="home_product_paging_page">Last</a>
                            </div>
                        </div>
                    <?php
                        endif;
                    ?>
                    <div class="product_content_category">
                        <?php if (!empty($product_items)) : ?>
                            <?php foreach ($product_items as $item): ?>
                        <a href="<?= $item['link'] ?>" class="product_content_category_item txt_18 txt_bold"><?= $item['title'] ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>
