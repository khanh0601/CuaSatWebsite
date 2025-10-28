<?php
    /**
     * Template Name: Công trình
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('construction-css', get_template_directory_uri() . '/css/construction.css');
    wp_enqueue_script('construction-js', get_template_directory_uri() . '/js/construction.js');
    $pageID = get_queried_object_id();
    // === Nội dung ===
    $construction_title = tr_posts_field('construction_title', $pageID);

    // === Tổng quan ===
    $construction_items = tr_posts_field('construction_items', $pageID); // Mỗi item: ['image', 'title']
?>
    <div class='main' data-barba-namespace="about">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="#" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="#" class="productdetail_breadcrumb_item">Công trình</a>
                </div>
            </div>
        </section>
        <section class="construction_content">
            <div class="kl_container">
                <div class="construction_content_title txt_title txt_des_border txt_34"><?= wp_kses_post($construction_title) ?></div>
                <div class="construction_content_list">
                    <?php if (!empty($construction_items)) : ?>
                        <?php foreach ($construction_items as $item): ?>
                    <a href="<?= $item['link'] ?>" class="construction_content_list_item">
                        <div class="construction_content_list_item_img img_full">
                            <img src="<?= esc_url(wp_get_attachment_url($item['image'])) ?>" alt="">
                        </div>
                        <div class="construction_content_list_item_title txt_16 txt_center"><?= $item['title'] ?></div>
                        </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
