<?php 
/*
Template Name: サイドバーあり
*/
get_header(); ?>

    <div class="content">
        <div class="content-main">

<?php 
if( have_posts() ):
    while( have_posts() ):the_post();
        the_content();
    endwhile;
endif;
?>
        </div><!--content-main-->
        <div class="content-side">
            <div class="side-box">
                <?php dynamic_sidebar('primary-widget-area'); ?>
            </div><!--side-box-->
        </div><!--content-side-->
    </div><!--content-->

        <?php get_footer(); ?>
