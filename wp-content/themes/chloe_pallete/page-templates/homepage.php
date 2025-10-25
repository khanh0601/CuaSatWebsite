<?php
    /**
     * Template Name: HomePage
     * Description:
     *
     * Tip:
     *
     * @package WordPress
     * @subpackage chloe_pallete
     * @since chloe_pallete 1.0
     */

    get_header();
    wp_enqueue_style('home-css', get_template_directory_uri() . '/css/home.css');
    wp_enqueue_script('home-js', get_template_directory_uri() . '/js/home.js');

?>
    <div class='main' data-barba-namespace="home">
    <section class="home_form">
            <div class="home_form_content">
                <div class="home_form_content_close">
                    <svg width="15" height="15" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 1L1 13M1 1L13 13" stroke="#777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="home_form_content_title txt_30 txt_title">Đăng kí nhận báo giá</div>
                <div class="home_form_content_des txt_center">Để lại thông tin bên dưới để được hỗ trợ tư vấn miễn phí</div>
                <div class="home_form_content_apply">
                    <input
                    type="text"
                    name="fullname"
                    placeholder="Họ và tên"
                    required
                    >
                    <input
                    type="tel"
                    name="phone"
                    placeholder="Điện thoại"
                    required
                    >
                    <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    required
                    >
                    <textarea
                    name="content"
                    placeholder="Nội dung"
                    rows="4"
                    required
                    ></textarea>
                     <button type="submit" class="home_form_content_apply_submit txt_title">ĐĂNG KÝ</button>
                </div>
        </div>
    </section>
    <section class="home_slider">
        <div class="home_slider_inner swiper">
            <div class="home_slider_list swiper-wrapper">
                <div class="home_slider_item swiper-slide img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_1.webp" alt="">
                </div>
                <div class="home_slider_item swiper-slide img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_2.webp" alt="">
                </div>
                <div class="home_slider_item swiper-slide img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_slide_3.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="home_about">
        <div class="kl_container">
            <div class="home_about_inner">
                <div class="home_about_img img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_about.jpg" alt="">
                </div>
                <div class="home_about_info">
                    <div class="home_about_info_subtitle txt_20 txt_uppercase">Về chúng tôi</div>
                    <div class="home_about_info_title txt_34 txt_uppercase">Giới thiệu về Cơ khí Tổng hợp Nguyễn Hải</div>
                    <div class="home_about_info_des">Cơ khí Tổng hợp Nguyễn Hải hoạt động với phương châm "Chất lượng - Uy tín - Tiến độ", không ngừng cải tiến và đổi mới công nghệ để đảm bảo hiệu quả công việc, giảm chi phí cho khách hàng và nâng cao năng suất. Chúng tôi tự hào là đối tác tin cậy của nhiều doanh nghiệp trong các ngành công nghiệp chế tạo, xây dựng, nông nghiệp và nhiều lĩnh vực khác.</div>
                    <a href="#" class="home_about_info_button txt_uppercase color_white">xem thêm</a>
                </div>
            </div>
            <div class="home_about_figure">
                <div class="home_about_figure_item">
                    <div class="home_about_figure_item_num txt_title txt_48 txt_center">500+</div>
                    <div class="home_about_figure_item_des txt_16 txt_center">Nhân Viên</div>
                </div>
                <div class="home_about_figure_item">
                    <div class="home_about_figure_item_num txt_title txt_48 txt_center">1000+</div>
                    <div class="home_about_figure_item_des txt_16 txt_center">Dự Án Thiết Kế </div>
                </div>
                <div class="home_about_figure_item">
                    <div class="home_about_figure_item_num txt_title txt_48 txt_center">900+</div>
                    <div class="home_about_figure_item_des txt_16 txt_center">Khách Hàng </div>
                </div>
                <div class="home_about_figure_item">
                    <div class="home_about_figure_item_num txt_title txt_48 txt_center">10+</div>
                    <div class="home_about_figure_item_des txt_16 txt_center">Năm Kinh Nghiệm </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home_service">
        <div class="kl_container">
            <div class="home_service_title txt_title txt_34">Dịch vụ chính</div>
            <div class="home_service_des txt_des_border txt_center txt_wh_500">Uy tín chất lượng. Đảm bảo tiến độ.Mang tính thẩm mỹ cao. Giá cả hợp lý. Dich vụ nhanh chóng. Làm hài lòng với khách hàng</div>
            <div class="home_service_list_wrap">
                <div class="home_service_list">
                    <a href="#" class="home_service_list_item">
                        <div class="home_service_list_item_img_wrap">
                            <div class="home_service_list_item_img img_scale img_full img_abs">
                                <div class="home_service_list_item_img_overlay"></div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home_service_1.webp" alt="">
                            </div>
                        </div>
                        <div class="home_service_list_item_title txt_uppercase txt_center txt_bold">LẮP ĐẶT SỬA CHỮA </div>
                        <div class="home_service_list_item_num txt_36 txt_center txt_title">01</div>
                    </a>
                    <a href="#" class="home_service_list_item">
                        <div class="home_service_list_item_img_wrap">
                            <div class="home_service_list_item_img img_scale img_full img_abs">
                                <div class="home_service_list_item_img_overlay"></div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home_service_2.webp" alt="">
                            </div>
                        </div>
                        <div class="home_service_list_item_title txt_uppercase txt_center txt_bold">thi công</div>
                        <div class="home_service_list_item_num txt_36 txt_center txt_title">02</div>
                    </a>
                    <a href="#" class="home_service_list_item">
                        <div class="home_service_list_item_img_wrap">
                            <div class="home_service_list_item_img img_scale img_full img_abs">
                                <div class="home_service_list_item_img_overlay"></div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home_service_3.webp" alt="">
                            </div>
                        </div>
                        <div class="home_service_list_item_title txt_uppercase txt_center txt_bold">Tư vấn báo giá</div>
                        <div class="home_service_list_item_num txt_36 txt_center txt_title">03</div>
                    </a>
                    <a href="#" class="home_service_list_item">
                        <div class="home_service_list_item_img_wrap">
                            <div class="home_service_list_item_img img_scale img_full img_abs">
                                <div class="home_service_list_item_img_overlay"></div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home_service_4.webp" alt="">
                            </div>
                        </div>
                        <div class="home_service_list_item_title txt_uppercase txt_center txt_bold">Thiết kế</div>
                        <div class="home_service_list_item_num txt_36 txt_center txt_title">04</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="home_product">
        <div class="kl_container">
            <div class="home_product_title txt_title txt_34">sản phẩm</div>
            <div class="home_product_des txt_des_border txt_wh_500 txt_center">Uy tín chất lượng. Đảm bảo tiến độ.Mang tính thẩm mỹ cao.Giá cả hợp lý. Dich vụ nhanh chóng. Làm hài lòng với khách hàng</div>
            <?php
                // Lấy tất cả categories
                $categories = get_categories([
                    'taxonomy'   => 'category',
                    'hide_empty' => true, // Chỉ lấy category có bài viết
                    'orderby'    => 'name',
                    'order'      => 'ASC',
                ]);

                // Loop qua từng category
                foreach ($categories as $category):
                    // Lấy các bài viết thuộc category hiện tại
                    $posts = get_posts([
                        'category'       => $category->term_id,
                        'posts_per_page' => -1, // Lấy tất cả bài viết, hoặc đổi thành số cụ thể
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ]);

                    // Chỉ hiển thị nếu category có bài viết
                    if (! empty($posts)):
                ?>
			    <div class="home_product_list">
			        <div class="home_product_list_title_wrap">
			            <div class="home_product_list_title">
			                <div class="home_product_list_title_txt txt_title txt_uppercase color_white txt_22">
			                    <?php echo esc_html($category->name); ?>
			                </div>
			                <div class="home_product_list_title_bg">
			                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_bg.png" alt="">
			                </div>
			            </div>
			        </div>

			        <div class="home_product_list_wrap swiper home_product_swiper_<?php echo $category->term_id; ?>">
			            <div class="home_product_list_card swiper-wrapper">
			                <?php foreach ($posts as $post): setup_postdata($post); ?>
						                    <div class="home_product_list_card_item swiper-slide">
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
                            <div class="home_product_list_card_item_sub txt_14 txt_bold txt_uppercase">
                                Đăng ký nhận báo giá
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php
    endif;
    endforeach;
?>
        </div>
    </section>
    <section class="home_construction">
        <div class="home_construction_inner">
            <div class="home_construction_title txt_title txt_34 txt_des_border">Công trình</div>
            <div class="home_construction_img img_full">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_construction.webp" alt="">
            </div>
        </div>
        <div class="kl_container">
            <div class="home_construction_list">
                <div class="home_construction_list_item">
                    <div class="home_construction_list_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_construction_icon1.png" alt="">
                    </div>
                    <div class="home_construction_list_item_info">
                        <div class="home_construction_list_item_info_title txt_bold color_white txt_uppercase">Phục vụ tân tâm</div>
                        <div class="home_construction_list_item_info_des txt_14 color_white ">Nhân viên giao hàng cần phải mở lòng và chấp nhận phản hồi từ khách hàng một cách xây dựng, dù đó là phản hồi tích cực hay tiêu cực.</div>
                    </div>
                </div>
                <div class="home_construction_list_item">
                    <div class="home_construction_list_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_construction_icon2.png" alt="">
                    </div>
                    <div class="home_construction_list_item_info">
                        <div class="home_construction_list_item_info_title txt_bold color_white txt_uppercase">CHUYÊN NGHIỆP </div>
                        <div class="home_construction_list_item_info_des txt_14 color_white ">Thiết kế thi công trọn gói nhà ở chính là thuê một đơn vị thực hiện toàn bộ các hạng mục công việc như: sơn tường, trần nhà,</div>
                    </div>
                </div>
                <div class="home_construction_list_item">
                    <div class="home_construction_list_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_construction_icon3.png" alt="">
                    </div>
                    <div class="home_construction_list_item_info">
                        <div class="home_construction_list_item_info_title txt_bold color_white txt_uppercase">Sáng tạo</div>
                        <div class="home_construction_list_item_info_des txt_14 color_white ">kế thi công trọn Sáng tạo ,  thi công xây dựng dân dụng, thi công nhà ở, thi công xây dựng nhà phố, xây dựng biệt thự, thi công ...</div>
                    </div>
                </div>
                <div class="home_construction_list_item">
                    <div class="home_construction_list_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home_construction_icon4.png" alt="">
                    </div>
                    <div class="home_construction_list_item_info">
                        <div class="home_construction_list_item_info_title txt_bold color_white txt_uppercase">ĐÚNG TIẾN ĐỘ </div>
                        <div class="home_construction_list_item_info_des txt_14 color_white "> Tiết kiệm thời gian và chi phí: Thiết kế thi công trọn gói giúp loại bỏ các bước không cần thiết, tiết kiệm thời gian và chi phí cho ...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home_news">
        <div class="kl_container">
            <div class="home_news_title txt_title txt_34 txt_des_border">Tin tức mới</div>
            <div class="home_news_inner swiper">
                <div class="home_news_list swiper-wrapper">
                <?php
                    // Lấy tất cả bài viết có post type 'tin-tuc'
                    $args = [
                        'post_type'      => 'tin-tuc',
                        'posts_per_page' => -1, // Lấy tất cả, hoặc số cụ thể như 10
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'post_status'    => 'publish',
                    ];

                    $tin_tuc_query = new WP_Query($args);

                    if ($tin_tuc_query->have_posts()):
                        while ($tin_tuc_query->have_posts()): $tin_tuc_query->the_post();
                        ?>
				    <div class="home_news_list_item swiper-slide">
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
    <p>Không có tin tức nào.</p>
<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="home_partner">
        <div class="kl_container">
            <div class="home_partner_title txt_title txt_34">Đối tác</div>
            <div class="home_partner_des txt_16 txt_wh_500 txt_center txt_des_border">Chúng tôi nhận làm, lắp đặt các loại cửa sắt, cửa cuốn, cửa kéo, cửa lùa, cửa xếp…Hãy đến với sửa cửa sắt Nguyễn Hải dịch vụ sửa cửa sắt tại nhà tphcm đảm bảo an toàn, chất lượng tốt.</div>
            <div class="home_partner_inner swiper">
                <div class="home_partner_list swiper-wrapper">
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home_partner_1.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


<?php get_footer(); ?>
