<?php get_header(); ?>
                <ul class="course-items">
<?php
$common_pages = get_child_pages();
if( $common_pages->have_posts() ):
    while( $common_pages->have_posts()): $common_pages->the_post();
    //content-course.phpにマークアップあり//
        get_template_part('content-course');
    endwhile;
    wp_reset_postdata();
endif;
?>
                </ul><!--course-items-->
                </div>
            </div>
        </section>
<?php get_footer(); ?>
