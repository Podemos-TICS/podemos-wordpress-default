<?php
/**
 * Default Index Template
 * Original from BootstrapWP
 * @author Gregor Hartmaier
 * @package WordPress
 * @subpackage Podemos Wordpress Theme
 */
?>
<?php get_header(); ?>
<div class="row main-content">
     <div class="col-lg-9 col-md-9 col-sm-9 col-9">     
         <div class="content main">
          <?php
            if (have_posts()) : while (have_posts()) : the_post();

                    get_template_part('content', get_post_format());

                endwhile;
            endif;

            if (function_exists('wp_pagenavi')) {

                wp_pagenavi();
            } else {

                bootstrapwp_content_nav('nav-below');
            }
            ?>
        </div> <!-- /.content -->                  
     </div> <!-- /.col -->    
     <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">
           <?php get_sidebar('post'); ?>
         </div><!--/.col -->
     </div> <!--/.row main-content -->
</div><!-- container -->
<?php get_footer(); ?>