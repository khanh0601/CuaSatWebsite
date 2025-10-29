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
    $pageID = get_queried_object_id();
    // === Banner Chính ===
$home_banner = wp_get_attachment_url(tr_posts_field('home_banner', $pageID));

// === Giới thiệu ===
$home_intro = wp_get_attachment_url(tr_posts_field('home_intro', $pageID));
$about_subtitle = tr_posts_field('about_subtitle', $pageID);
$about_title = tr_posts_field('about_title', $pageID);
$about_des = tr_posts_field('about_des', $pageID);
$about_seemore = tr_posts_field('about_seemore', $pageID);
$about_link = tr_posts_field('about_link', $pageID);
$about_items = tr_posts_field('about_items', $pageID); // Mỗi item: ['amount', 'title']

// === Dịch vụ chính ===
$service_title = tr_posts_field('service_title', $pageID);
$service_des = tr_posts_field('service_des', $pageID);
$service_items = tr_posts_field('service_items', $pageID); // Mỗi item: ['image', 'link', 'title', 'num']

// === Sản phẩm ===
$product_title = tr_posts_field('product_title', $pageID);
$product_des = tr_posts_field('product_des', $pageID);

// === Công trình ===
$construction_title = tr_posts_field('construction_title', $pageID);
$construction_img = wp_get_attachment_url(tr_posts_field('construction_img', $pageID));
$construction_items = tr_posts_field('construction_items', $pageID); // Mỗi item: ['image', 'title', 'des']

// === Tin tức ===
$news_title = tr_posts_field('news_title', $pageID);

// === Đối tác ===
$partner_title = tr_posts_field('partner_title', $pageID);
$partner_des = tr_posts_field('partner_des', $pageID);
$partner_items = tr_posts_field('partner_items', $pageID); // Mỗi item: ['image']

?>
    <div class='main' data-barba-namespace="home" id="top">
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
        <div class="home_slider_inner">
            <div class="home_slider_list ">
                <div class="home_slider_item  img_full">
                    <img src="<?php echo $home_banner ?>" alt="">
                </div>
                <!-- <div class="home_slider_item swiper-slide img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/baner-co-khi-hoa-phat.png" alt="">
                </div>
                <div class="home_slider_item swiper-slide img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/baner-co-khi-hoa-phat.png" alt="">
                </div> -->
            </div>
        </div>
    </section>
    <section class="home_about">
        <div class="kl_container">
            <div class="home_about_inner">
                <div class="home_about_img img_abs">
                    <div class="home_about_img_inner">
                        <div class="home_about_img_overlay"></div>
                        <img src="<?php echo $home_intro ?>" alt="">
                    </div>
                </div>
                <div class="home_about_info">
                    <div class="home_about_info_subtitle txt_20 txt_uppercase"><?= wp_kses_post($about_subtitle) ?></div>
                    <h2 class="home_about_info_title txt_34 txt_uppercase"><?= wp_kses_post($about_title) ?></h2>
                    <div class="home_about_info_des"><?= wp_kses_post($about_des) ?></div>
                    <a href="<?= wp_kses_post($about_link) ?>" class="home_about_info_button txt_uppercase color_white"><?= wp_kses_post($about_seemore) ?></a>
                </div>
            </div>
            <div class="home_about_figure">
                 <?php if (!empty($about_items)) : ?>
                <?php foreach ($about_items as $item): ?>
                <div class="home_about_figure_item">
                    <div class="home_about_figure_item_num txt_title txt_48 txt_center"><?= $item['amount'] ?>+</div>
                    <div class="home_about_figure_item_des txt_16 txt_center"><?= $item['title'] ?></div>
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="home_service">
        <div class="kl_container">
            <h2 class="home_service_title txt_title txt_34"><?= wp_kses_post($service_title) ?></h2>
            <div class="home_service_des txt_des_border txt_center txt_wh_500"><?= wp_kses_post($service_des) ?></div>
            <div class="home_service_list_wrap">
                <div class="home_service_list">
                     <?php if (!empty($service_items)) : ?>
                <?php foreach ($service_items as $item): ?>
                    <a href="<?= $item['link'] ?>" class="home_service_list_item">
                        <div class="home_service_list_item_img_wrap">
                            <div class="home_service_list_item_img img_scale img_full img_abs">
                                <div class="home_service_list_item_img_overlay"></div>
                                <img src="<?= esc_url(wp_get_attachment_url($item['image'])) ?>" alt="">
                            </div>
                        </div>
                        <div class="home_service_list_item_title txt_uppercase txt_center txt_bold"><?= $item['title'] ?></div>
                        <div class="home_service_list_item_num txt_36 txt_center txt_title"><?= $item['num'] ?></div>
                    </a>
                    <?php endforeach; ?>
              <?php endif; ?>
                </div>
            </div>
            <div class="home_product_pagi"></div>
        </div>
    </section>
    <section class="home_product">
        <div class="kl_container">
            <h2 class="home_product_title txt_title txt_34"><?= wp_kses_post($product_title) ?></h2>
            <div class="home_product_des txt_des_border txt_wh_500 txt_center"><?= wp_kses_post($product_des) ?></div>
            <?php
                // Lấy tất cả categories
                $categories = get_categories([
                    'taxonomy'   => 'category',
                    'hide_empty' => true,
                    'orderby'    => 'name',
                    'order'      => 'ASC',
                ]);

                // Loop qua từng category
                foreach ($categories as $category):
                    $posts = get_posts([
                        'category'       => $category->term_id,
                        'posts_per_page' => -1,
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
					                <div class="home_product_list_title_bg img_full">
					                    <img src="<?php echo get_template_directory_uri(); ?>/images/home_product_bg.png" alt="">
					                </div>
					            </div>
	                            <div class="home_product_control">
	                                <div class="home_product_control_item prev">
	                                    <div class="home_product_control_item_img img_full">
	                                    <svg width="100%" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.01971 2.33331L0.754477 6.58687C0.644705 6.69631 0.583008 6.84495 0.583008 6.99996C0.583008 7.15497 0.644705 7.30361 0.754477 7.41305L5.01971 11.6666L5.84344 10.8404L2.57761 7.58329H13.4163V6.41663H2.57761L5.84344 3.1595L5.01971 2.33331Z" fill="currentColor"/>
	                                    </svg>

	                                    </div>
	                                </div>
	                                <div class="home_product_control_item next">
	                                    <div class="home_product_control_item_img img_full">
	                                        <svg width="100%" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.97964 2.33331L13.2449 6.58687C13.3546 6.69631 13.4163 6.84495 13.4163 6.99996C13.4163 7.15497 13.3546 7.30361 13.2449 7.41305L8.97964 11.6666L8.15591 10.8404L11.4217 7.58329H0.583008V6.41663H11.4217L8.15591 3.1595L8.97964 2.33331Z" fill="currentColor"/>
	                                        </svg>
	                                    </div>
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
        <div class="home_product_pagi"></div>
    </div>
<?php
    endif;
    endforeach;
?>
        </div>
    </section>
    <section class="home_construction">
        <div class="home_construction_inner">
            <h2 class="home_construction_title txt_title txt_34 txt_des_border"><?= wp_kses_post($construction_title) ?></h2>
            <div class="home_construction_img img_full">
                <img src="<?php echo $construction_img ?>" alt="">
            </div>
        </div>
        <div class="kl_container">
            <div class="home_construction_list">
                 <?php if (!empty($construction_items)) : ?>
                <?php foreach ($construction_items as $item): ?>
                <div class="home_construction_list_item">
                    <div class="home_construction_list_item_img img_full">
                        <img src="<?= esc_url(wp_get_attachment_url($item['image'])) ?>" alt="">
                    </div>
                    <div class="home_construction_list_item_info">
                        <div class="home_construction_list_item_info_title txt_bold color_white txt_uppercase"><?= $item['title'] ?></div>
                        <div class="home_construction_list_item_info_des txt_14 color_white "><?= $item['des'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="home_news">
        <div class="kl_container">
            <h2 class="home_news_title txt_title txt_34 txt_des_border"><?= wp_kses_post($news_title) ?></h2>
            <div class="home_news_inner swiper">
                <div class="home_news_list swiper-wrapper">
                <?php
                    $args = [
                        'post_type'      => 'tin-tuc',
                        'posts_per_page' => -1,
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
            <div class="home_product_pagi"></div>
        </div>
    </section>
    <section class="home_partner">
        <div class="kl_container">
            <h2 class="home_partner_title txt_title txt_34"><?= wp_kses_post($partner_title) ?></h2>
            <div class="home_partner_des txt_16 txt_wh_500 txt_center txt_des_border"><?= wp_kses_post($partner_des) ?></div>
            <div class="home_partner_inner swiper">
                <div class="home_partner_list swiper-wrapper">
                    <?php if (!empty($partner_items)) : ?>
                <?php foreach ($partner_items as $item): ?>
                    <div class="home_partner_list_item swiper-slide">
                        <div class="home_partner_list_item_img img_full">
                            <img src="<?= esc_url(wp_get_attachment_url($item['image'])) ?>" alt="">
                        </div>
                    </div>
                    <?php endforeach; ?>
              <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    </div>


<?php get_footer(); ?>
