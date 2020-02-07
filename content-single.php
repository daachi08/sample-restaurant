<!-- 投稿記事出力のテンプレートパーツ-->
                    <div class="single-news">
                        <time class="time"><?php the_time('Y.m.d'); ?></time>
                        <p class="single-title"><?php the_title(); ?></p>
                        <div class="single-body">
                            <?php the_content(); ?>
                        </div><!--single-body-->
                    </div><!--single-news-->
                        <div class="single-bottom">
<?php 
$next_post = get_next_post();
$prev_post = get_previous_post();
if( $next_post ):
?>
                            <div class="prev">
                                <a href="<?php echo get_permalink( $next_post->ID);?>" class="prev-link">
                                        <i class="fas fa-angle-double-left"></i><span>PREV</span>       
                                </a>
                            </div><!--prev-->
<?php
endif;
if( $prev_post ):
?>
                            <div class="next">
                                <a href="<?php echo get_permalink( $prev_post->ID);?>" class="next-link">NEXT
                                    <i class="fas fa-angle-double-right"></i>
                                </a><!--next-link-->
                            </div><!--next-->
<?php endif; ?>
</div>
