<?php get_header(); ?>
                    <div class="news-list">
<?php 
if( have_posts() ):
    while( have_posts() ):the_post();
        get_template_part( 'content-archive');
    endwhile;
endif;
?>
                    </div>
                    <div class="pager">
                        <ul class="pagerList">
<?php
if (function_exists( 'page_navi')):
  page_navi();
endif;
?>
                        </ul>
                      </div>
                </div>
            </div>

        </section><!--main-->
<?php get_footer(); ?>
