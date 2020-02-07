<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--font-awesome-->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- wow -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet"
        type="text/css" media="all">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">

        <!-- header -->
        <header class="header">

        <!--ドロワーメニュー-->
        <a class="screen-menu">
                <span class="menu__line menu__line--top"></span>
                <span class="menu__line menu__line--center"></span>
                <span class="menu__line menu__line--bottom"></span>
            </a>
            <nav class="gnav">
                <div class="gnav__wrap">
                    <ul class="gnav__menu">
                        <li class="gnav__menu__item">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_global_drawer',
    'container' => false,
  )
  );
  ?>
                        </li><!--gnav__menu__item-->
                    </ul><!--gnav__menu-->
                </div><!--gnav-wrap-->
            </nav>
            <!--ドロワーメニュー-->

            <div class="header-wrapper">
                <div class="header-list_wrapper">
                <div class="inner">
                    <div class="header-list">           
                        <nav class="global-nav_left">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_global',
    'container' => false,
  )
  );
  ?>
                        </nav><!--global-nav_left-->
                        <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="">
                        <nav class="global-nav_right">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_global_right',
    'container' => false,
  )
  );
  ?>
                        </nav><!--global-nav_right-->
                    </div><!--header-list-->
                </div><!--inner-->
            </div><!--header-list_wrapper-->
            </div><!--header-wrapper-->   
        </header><!-- header end -->
<?php if( is_front_page() ): ?>
        <section class="main">
            <div class="main-wrapper">
                <!--スライドショー-->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/image/food.jpg"  class="main-image" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/image/steak.jpg"  class="main-image" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/image/restaurant3.jpg"  class="main-image" alt=""></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div><!--swiper-container-->
            <!--スライドショーend-->
            </div><!--main-wrapper-->
        </section><!--main-->
<?php else: ?>
        <section class="page-top">
            <div class="page-top_wrapper">
                <?php echo get_main_image(); ?>
                    <h2 class="page-title"><?php echo get_main_title(); ?></h2>
                </div>
        </section><!--page-top-->

        <section class="main">
            <div class="page-main">
                <div class="inner">
<?php
if ( function_exists('bread_crumb')):
    bread_crumb();
endif; 
?>
<?php endif; ?>

 
