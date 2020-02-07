<?php get_header(); ?>
                <div class="single-inner">
<?php 
if( have_posts() ):
    while( have_posts() ):the_post();
    //投稿記事出力のテンプレートパーツ呼び出し//
    get_template_part( 'content-single' );
    endwhile;
endif;
?>
            </div>
            </div>

        </section><!--main-->

<?php get_footer(); ?>
