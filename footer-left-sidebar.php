<?php

/**

 * Footer for left sidebar pages

 * Original from BootstrapWP

 * @author Gregor Hartmaier

 * @package WordPress

 * @subpackage Podemos Wordpress Theme

 */

?>

<footer>

    <div class="footer-wrapper">

        <div class="row">

            <!--  <div class="footer-divider"></div>-->

            <div class="container">

                <?php get_sidebar('footer-left'); ?>

            </div>

        </div>

    </div>

    <div class="copyright-wrapper">

        <div class="row ">

            <div class="container">

                <div class="row copyright">    

                    <div class="col-md-12">

						<div class="pull-left">

                            <?php

                            $options = get_option('podemoswp_theme_options');

                            if ($options['footertext'] != '') {

                                echo ('<p>');

                                echo stripslashes($options['footertext']);

                                echo ('</p>');

                            } else {

                                ?>

                                <ul class="credit">

                                    <li>&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?></li>

                                    <li><?php _e('Website powered by ', 'podemoswp') ?> <a href="<?php echo esc_url(__('http://wordpress.org/', 'podemoswp')); ?>" ><?php _e('WordPress', 'podemoswp') ?></a>.</li>

                                    <li><?php printf(__('Podemos Theme by', 'podemoswp')); ?> <a href="http://webdesign4pros.com/">Web4Pros</a></li>

                                </ul><!-- end .credit -->

                            <?php } ?>

                        </div>

                        <div class="footer-menu-wrapper">

                            <?php

                            if (has_nav_menu('footer-menu')) {

                                wp_nav_menu(array(

                                    'menu' => '',

                                    'theme_location' => 'footer-menu',

                                    'depth' => 2,

                                    'container' => false,

                                    'menu_class' => 'footer-menu',

                                    'fallback_cb' => 'wp_page_menu',

                                    'walker' => new wp_bootstrap_navwalker())

                                );

                            }

                            ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>