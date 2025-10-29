<?php
    /**
     * Template Name: Giới thiệu
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('about-css', get_template_directory_uri() . '/css/about.css');
    wp_enqueue_script('about-js', get_template_directory_uri() . '/js/about.js');
    $pageID = get_queried_object_id();
    // === Nội dung ===
    $about_title = tr_posts_field('about_title', $pageID);
    $about_des = tr_posts_field('about_des', $pageID);

    // === Tổng quan ===
    $about_share = tr_posts_field('about_share', $pageID); // Mỗi item: ['img', 'link']
?>
    <div class='main' data-barba-namespace="about" id="top">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="#" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="#" class="productdetail_breadcrumb_item">Giới thiệu</a>
                </div>
            </div>
        </section>
        <section class="about_content">
            <div class="kl_container">
                <div class="about_content_title txt_title txt_des_border txt_34"><?= wp_kses_post($about_title) ?></div>
                <div class="about_content_des txt_20"><?= wp_kses_post($about_des) ?></div>
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

    </div>
<?php get_footer(); ?>
