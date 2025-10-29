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
    <div class='main' data-barba-namespace="about" id="top">
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
                                <div class="contact_content_left_right_form_col_inner">
                                    <input 
                                    type="text" 
                                    id="subject" 
                                    name="subject" 
                                    class="form-input" 
                                    placeholder="Tiêu đề"
                                    required
                                    >
                                    <label for="fileUpload" class="fileUpload_label">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.1527 10.8995L12.1371 19.9151C10.0869 21.9653 6.76275 21.9653 4.71249 19.9151C2.66224 17.8648 2.66224 14.5407 4.71249 12.4904L13.7281 3.47483C15.0949 2.108 17.311 2.108 18.6779 3.47483C20.0447 4.84167 20.0447 7.05775 18.6779 8.42458L10.0158 17.0866C9.33238 17.7701 8.22434 17.7701 7.54092 17.0866C6.8575 16.4032 6.8575 15.2952 7.54092 14.6118L15.1423 7.01037" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                    </label>
                                    <input type="file" id="fileUpload" name="attachment" class="form_file" multiple>
                                </div>
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
                            <div class="contact_content_left_right_form_button_wrap">
                                <button type="submit" class="contact_content_left_right_form_button">GỬI</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>
