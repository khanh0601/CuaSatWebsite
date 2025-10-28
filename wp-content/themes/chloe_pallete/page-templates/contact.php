<?php
    /**
     * Template Name: Liên hệ
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/contact.css');
    wp_enqueue_script('contact-js', get_template_directory_uri() . '/js/contact.js');
    $pageID = get_queried_object_id();
    // === Nội dung ===
    $contact_map = tr_posts_field('contact_map', $pageID);
    $contact_name = tr_posts_field('contact_name', $pageID);
    $contact_des = tr_posts_field('contact_des', $pageID);
    $contact_title = tr_posts_field('contact_title', $pageID);
?>
    <div class='main' data-barba-namespace="about">
        <section class="productdetail_breadcrumb">
            <div class="kl_container">
                <div class="productdetail_breadcrumb_inner">
                    <a href="#" class="productdetail_breadcrumb_item">Trang chủ</a>
                    <a href="#" class="productdetail_breadcrumb_item">Liên hệ</a>
                </div>
            </div>
        </section>
        <section class="contact_content">
            <div class="kl_container">
                <div class="contact_content_inner">
                    <div class="contact_content_left">
                        <div class="contact_content_left_map">
                            <iframe src="<?= wp_kses_post($contact_map) ?>" frameborder="0"></iframe>
                        </div>
                        <h2 class="contact_content_left_title txt_title txt_26"><?= wp_kses_post($contact_name) ?></h2>
                        <div class="contact_content_left_des"><?= wp_kses_post($contact_des) ?></div>
                    </div>
                    <div class="contact_content_left_right">
                        <h1 class="contact_content_left_right_title txt_wh_500 txt_32"><?= wp_kses_post($contact_title) ?></h1>
                        <div class="contact_content_left_right_form">
                            <div class="contact_content_left_right_form_col">
                                <div class="contact_content_left_right_form_label txt_12">Họ và tên</div>
                                <input 
                                type="text" 
                                id="fullName" 
                                name="fullName" 
                                class="form-input" 
                                placeholder="Họ và tên"
                                required
                                >
                            </div>
                            <div class="contact_content_left_right_form_col">
                                <div class="contact_content_left_right_form_label txt_12">Điện thoại</div>
                                <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                class="form-input" 
                                placeholder="Điện thoại"
                                required
                                >
                            </div>
                            <div class="contact_content_left_right_form_col">
                                <div class="contact_content_left_right_form_label txt_12">Địa chỉ</div>
                                <input 
                                type="text" 
                                id="address" 
                                name="address" 
                                class="form-input" 
                                placeholder="Địa chỉ"
                                required
                                >
                            </div>
                            <div class="contact_content_left_right_form_col">
                                <div class="contact_content_left_right_form_label txt_12">Email</div>
                                 <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input" 
                                placeholder="Email"
                                required
                                >
                            </div>
                            <div class="contact_content_left_right_form_col">
                                <div class="contact_content_left_right_form_label txt_12">Tiêu đề</div>
                                <input 
                                type="text" 
                                id="subject" 
                                name="subject" 
                                class="form-input" 
                                placeholder="Tiêu đề"
                                required
                                >
                                <input type="file" id="fileUpload" name="attachment" multiple>
                            </div>
                            <div class="contact_content_left_right_form_col">
                                <div class="contact_content_left_right_form_label txt_12">Nội dung</div>
                                <textarea 
                                id="message" 
                                name="message" 
                                class="form-input" 
                                placeholder="Nội dung"
                                rows="4"
                                required
                                ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
