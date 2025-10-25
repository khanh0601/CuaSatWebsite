<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php  wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="<?= get_template_directory_uri(); ?>/plugin/font-awesome/css/all.min.css" rel="stylesheet" >
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css?v=<?= SITE_VERSION ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
  $currentLang = get_locale();
  $currentLang= explode("_",$currentLang)[0];
	wp_enqueue_script('jquery-cus', "https://code.jquery.com/jquery-3.7.1.min.js", [], null, true);
  wp_enqueue_style( 'swiper', get_template_directory_uri() . '/plugin/swiper/swiper-bundle.min.css');
  wp_enqueue_script('swiper', get_template_directory_uri() . '/plugin/swiper/swiper-bundle.min.js',array(),SITE_VERSION,true);
  wp_enqueue_script('gsap', get_template_directory_uri() . '/js/gsap.min.js',array(),SITE_VERSION,true);
  wp_enqueue_script('scrolltrigger', get_template_directory_uri() . '/js/ScrollTrigger.min.js',array(),SITE_VERSION,true);
  wp_enqueue_script('lenis', get_template_directory_uri() . '/js/lenis.min.js',array(),SITE_VERSION,true);
  wp_enqueue_script('animation', get_template_directory_uri() . '/js/animation.js',array(),SITE_VERSION,true);
  // wp_enqueue_script('global', get_template_directory_uri() . '/js/global.js');
  wp_enqueue_script('splitType', get_template_directory_uri() . '/js/split-type.js',array(),null,true);
	wp_head();

  $currentLang = get_locale();
  $currentLang= explode("_",$currentLang)[0];
  $homeUrl = home_url();
  $isFrontPage = is_front_page();

  $languages=[
    ["url"=>"#","slug"=>"vi"],
    ["url"=>"#","slug"=>"en"],
  ];
  if(function_exists("pll_the_languages")){
    $languages =   pll_the_languages( array(
           'show_flags' => 0,
           'hide_current'=>0,
           'raw'=>1
      ));  
  }
  
 ?>

<?= tr_options_field('tr_theme_options.script_header');?>


</head>

<?php 
  global $disableFullpage;
  global $pageClass;
?>
<body class="<?= $isFrontPage ?"home-page":"" ?> <?= !empty($disableFullpage)?"disable-fullpage":"" ?> <?= $pageClass ?>">
  <?= tr_options_field('tr_theme_options.script_body');?>

  <!-- Header -->
  <header class="header">
        <div class="header_top">
            <div class="kl_container">
                <div class="header_top_inner">
                    <a href="/" class="header_top_logo img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="">
                    </a>
                    <div class="header_top_contact desktop img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/header_contact.webp" alt="">
                    </div>
                    <div class="header_top_hotline desktop">
                        <div class="header_top_hotline_phone img_full"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-hotline.png" alt="">
                        </div>
                        <div class="header_top_hotline_txt_wrap">
                            <div class="header_top_hotline_txt">Hotline:</div>
                            <div class="header_top_hotline_tele txt_20 txt_bold">0943279803</div>
                        </div>
                    </div>
                    <div class="header_top_right tablet">
                        <div class="header_top_right_search">
                            <div class="header_top_right_search_img">
                                <div class="header_top_right_search_img_icon svg_full active">
                                    <svg width="15" height="15" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.75 15.75L12.125 12.125M14.0833 7.41667C14.0833 11.0986 11.0986 14.0833 7.41667 14.0833C3.73477 14.0833 0.75 11.0986 0.75 7.41667C0.75 3.73477 3.73477 0.75 7.41667 0.75C11.0986 0.75 14.0833 3.73477 14.0833 7.41667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                                <div class="header_top_right_search_img_icon svg_full">
                                    <svg width="15" height="15" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1L1 13M1 1L13 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                            <div class="header_top_right_search_input">
                                <div class="header_top_right_search_input_inner">
                                    <input type="search" name="s" class="search-input txt_14" placeholder="Tìm kiếm sản phẩm">
                                </div>
                                <div class="header_top_right_search_input_icon svg_full">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="white" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 17.5L13.875 13.875M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z" stroke="#0052B6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="header_top_right_menu">
                            <span></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="header_menu">
            <div class="kl_container">
                <div class="header_menu_inner_wrap">
                    <div class="header_menu_background img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-menu.png" alt="">
                    </div>
                    <div class="header_menu_inner">
                        <div class="header_menu_nav">
                            <div class="header_menu_nav_wrap">
                                <a href="/" class="header_menu_nav_item color_white txt_uppercase txt_15 txt_bold active">trang chủ</a>
                            </div>
                            <div class="header_menu_nav_wrap">
                                <a href="#" class="header_menu_nav_item color_white txt_uppercase txt_15 txt_bold">giới thiệu</a>
                            </div>
                            <div class="header_menu_nav_wrap parent">
                                <a href="#" class="header_menu_nav_item color_white txt_uppercase txt_15 txt_bold">dịch vụ</a>
                                <div class="header_menu_nav_child">
                                    <a href="#" class="header_menu_nav_child_item">LẮP ĐẶT SỬA CHỮA </a>
                                    <a href="#" class="header_menu_nav_child_item">THI CÔNG </a>
                                    <a href="#" class="header_menu_nav_child_item">TƯ VẤN BÁO GIÁ </a>
                                    <a href="#" class="header_menu_nav_child_item">THIẾT KẾ </a>
                                </div>
                            </div>
                            <div class="header_menu_nav_wrap parent">
                                <a href="#" class="header_menu_nav_item color_white txt_uppercase txt_15 txt_bold">sản phẩm</a>
                                <div class="header_menu_nav_child">
                                    <a href="#" class="header_menu_nav_child_item">THỢ HÀN SẮT</a>
                                    <a href="#" class="header_menu_nav_child_item">SỬA CỬA KÉO</a>
                                    <a href="#" class="header_menu_nav_child_item">SƠN CỬA SẮT</a>
                                    <a href="#" class="header_menu_nav_child_item">CỬA KÉO MỚI</a>
                                    <a href="#" class="header_menu_nav_child_item">MÁI TÔN</a>
                                    <a href="#" class="header_menu_nav_child_item">SỬA CỬA SẮT</a>
                                    <a href="#" class="header_menu_nav_child_item">SỬA CỬA CUỐN</a>
                                    <a href="#" class="header_menu_nav_child_item">SỬA CỬA KÍNH</a>
                                </div>
                            </div>
                            <div class="header_menu_nav_wrap">
                                <a href="#" class="header_menu_nav_item color_white txt_uppercase txt_15 txt_bold">công trình</a>
                            </div>
                            <div class="header_menu_nav_wrap">
                                <a href="#" class="header_menu_nav_item color_white txt_uppercase txt_15 txt_bold">tin tức</a>
                            </div>
                            <div class="header_menu_nav_wrap">
                                <a href="#" class="header_menu_nav_item color_white txt_uppercase txt_15 txt_bold">liên hệ</a>
                            </div>
                        </div>
                        <div class="header_menu_search">
                            <div class="header_menu_search_input">
                                <input type="text" class="search-input" placeholder="Tìm kiếm">
                                <div class="header_menu_search_icon svg_full">
                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="white" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M17.5 17.5L13.875 13.875M15.8333 9.16667C15.8333 12.8486 12.8486 15.8333 9.16667 15.8333C5.48477 15.8333 2.5 12.8486 2.5 9.16667C2.5 5.48477 5.48477 2.5 9.16667 2.5C12.8486 2.5 15.8333 5.48477 15.8333 9.16667Z" stroke="#0052B6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                   </svg>
           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_tab tablet">
            <div class="header_tab_title txt_uppercase txt_bold txt_center">Menu</div>
            <div class="header_tab_item_wrap">
                <a href="#" class="header_tab_item txt_uppercase txt_14">trang chủ</a>
            </div>
            <div class="header_tab_item_wrap">
                <a href="#" class="header_tab_item txt_uppercase txt_14">Giới thiệu</a>
            </div>
            <div class="header_tab_item_wrap tab_parent">
                <a href="#" class="header_tab_item txt_uppercase txt_14">Dịch vụ</a>
                <div class="header_tab_item_child img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_arrow_right.svg" alt="">
                </div>
            </div>
            <div class="header_tab_item_wrap tab_parent">
                <a href="#" class="header_tab_item txt_uppercase txt_14">Sản phẩm</a>
                <div class="header_tab_item_child img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_arrow_right.svg" alt="">
                </div>
            </div>
            <div class="header_tab_item_wrap">
                <a href="#" class="header_tab_item txt_uppercase txt_14">Công trình</a>
            </div>
            <div class="header_tab_item_wrap">
                <a href="#" class="header_tab_item txt_uppercase txt_14">Tin tức</a>
            </div>
            <div class="header_tab_item_wrap">
                <a href="#" class="header_tab_item txt_uppercase txt_14">Liên hệ</a>
            </div>
        </div>
    </header>
  <div  class="fp-custom ">