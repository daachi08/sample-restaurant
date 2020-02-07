<?php get_header(); ?>
        <section class="about">
            <div class="about-wrapper">
                <div class="inner">
<?php
$shop_obj = get_page_by_path ('about');
$post = $shop_obj;
setup_postdata( $post );
$shop_title = get_the_title();
?>
                    <div class="about-heading">
                        <h2 class="title">
                        <?php the_title(); ?>
                        </h2>
                        <p class="sub-title"><?php echo get_the_excerpt(); ?></p>

                        <p class="border-line"></p>
                    </div><!--about-heading-->
                        <div class="about-text">
                        <?php the_content();?>
                        </div><!--about-text-->
<?php wp_reset_postdata(); ?>
                        <a class="button" href="<?php echo esc_url( home_url('shop'));?>">店舗紹介を見る</a>


                </div><!--inner-->
            </div><!--about-wrapper-->
        </section><!--about-->

        <section class="menu">
            <div class="menu-wrapper">
                <div class="inner">
                    <div class="menu-heading">
<?php
$menu_obj = get_page_by_path ('menu');
$post = $menu_obj;
setup_postdata( $post );
$menu_title = get_the_title();
?>
                        <h2 class="title">
                        <?php the_title(); ?>
                        </h2>
                        <p class="sub-title"><?php echo get_the_excerpt(); ?></p>
                        <p class="border-line"></p>
                    </div><!--menu-heading-->
                        <ul class="menu-image">
<?php
$menu_pages = get_child_pages( 4, $menu_obj->ID );
if ( $menu_pages->have_posts() ):
  while ( $menu_pages->have_posts()): $menu_pages->the_post();
?>
  <li class="menu-item">
    <div class="shop-image"><?php the_post_thumbnail('menu'); ?></div>
</li>

<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
                      </ul><!--about-heading-->
                    <a class="button" href="<?php echo esc_url( home_url('menu'));?>"><?php echo $menu_title; ?>一覧を見る</a>
                </div><!--inner-->
            </div><!--menu-wrapper-->
        </section><!--menu-->

        <section class="news">
            <div class="news-wrapper">
                <div class="inner">
<?php $term_obj = get_term_by('slug','news','category'); ?>
                    <div class="news-heading">
                        <h2 class="title">
                        <?php echo $term_obj->name; ?>
                        </h2>
                        <p class="sub-title"><?php echo $term_obj->description; ?>
                        </p>
                        <p class="border-line"></p>
                    </div>
                        <ul class="news-content">
<?php
$news_posts = get_specific_posts( 'post','category','news', 3 );
if($news_posts->have_posts()):
  while($news_posts->have_posts()): $news_posts->the_post();
?>
                            <li class="news-item">
                                <a href="<?php the_permalink(); ?>" class="news-link">
                                    <time class="news-time"><?php the_time('Y.m.d');?></time>
                                    <p class="news-title">
                                    <?php the_title(); ?>
                                    </p>
                                    <p class="news-text">
                                    <?php echo get_the_excerpt(); ?> 
                                    </p>
                                </a>
                            </li><!--news-item-->
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
                        </ul><!--news-content-->
                        <a class="button" href="<?php echo esc_url( get_term_link( $term_obj));?>">
                        <?php echo $term_obj->name; ?>一覧を見る</a>
                </div><!--inner-->
            </div><!--news-wrapper-->
        </section><!--news-->

        <section class="access">
            <div class="access-wrapper">

<?php
$access_obj = get_page_by_path ('access');
$post = $access_obj;
setup_postdata( $post );
$access_title = get_the_title();
?>
<?php the_content();?>

                <div class="access-boxs">
                    <div class="access-heading_pc">
                        <div class="access-icon"><i class="fas fa-times"></i></div>
                            <h2 class="access-title"><?php the_title(); ?></h2>
                            <p class="border-line_access"></p>
                            <p class="access-text"><?php echo get_the_excerpt(); ?></p>
                    </div><!--access-heading_pc-->
                </div><!--access-boxs-->
                    <div class="access-wrapepr_sp">
                        <div class="inner">
                            <div class="access-heading_sp">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <p class="border-line"></p>
                            <p class="sub-title"><?php echo get_the_excerpt(); ?></p> 
                            </div><!--access-heading_sp-->
                        </div><!--inner-->
                    </div><!--access-wrapper_sp-->
<?php     
wp_reset_postdata();?>
            </div><!--access-wrapper-->

        </section><!--access end-->

<?php get_footer(); ?>
