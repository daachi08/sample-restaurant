                    <li class="course-item">
                        <a href="<?php the_permalink();?>" class="menu-item_link">
                        <div class="course-image"><?php the_post_thumbnail('course'); ?></div>
                            <div class="menu-body">
                                <p class="menu-name"><?php the_title(); ?></p>
                                <p class="course-subtitle"><?php echo get_the_excerpt(); ?></p>
                                <p class="menu-button" href=""><?php the_title(); ?>を見る</p>
                            </div><!--menu-body-->
                        </a><!--menu-item_link-->
                    </li><!--course-item-->
