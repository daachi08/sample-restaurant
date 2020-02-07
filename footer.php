<?php if( ! is_front_page() ): ?>
                </div>
            </div>
        </section><!--main-->
<?php endif; ?>
<!-- footer -->
        <footer class="footer">
            <div class="footer-wrapper">
                <div class="footer-contents">
                    <div class="footer-contents_left">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="">
                    </div>
                    <div class="footer-contents_right">
                        <nav class="footer-nav">
                            <ul>
                            <li>
                                <?php
wp_nav_menu(
  array(
    'theme_location' => 'place_footer',
    'container' => false,
  )
  );
  ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <p class="copy-right">copyright © 2019 SumpleRestaurant All Rights Reserved.</p>
        </footer><!-- footer end -->

    </div>
    <!--wrapper end-->

    <!-- script js-->
    <script src="js/script.js"></script>
    <!-- wow -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
