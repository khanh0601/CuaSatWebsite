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
?>
    <div class='main' data-barba-namespace="service">
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
                <div class="service_content_title txt_34 txt_title txt_des_border">Dịch vụ</div>
                
            </div>
        </section>

    </div>
<?php get_footer(); ?>
