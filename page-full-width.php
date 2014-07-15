<?php
/**
 * Template Name: Full Width Page
 * Original from BootstrapWP
 * @author Gregor Hartmaier
 * @package WordPress
 * @subpackage Podemos Wordpress Theme
 */
?>
<?php get_header(); ?>
     <div class="container main">
     <div class="row headimage">
        <?php if(function_exists('chi_display_header')) { chi_display_header(); } ?>
           <?php
            if (function_exists('bootstrapwp_breadcrumbs')) { 
                bootstrapwp_breadcrumbs();   
            }
            ?>
         </div><!--/.col -->
     </div><!--/.row -->
     <div class="row main-content">      
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">               
                    <div class="content main">
                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="post" id="post-<?php the_ID(); ?>">
                            <?php echo the_content(); ?>
                       </article>
                       <?php endwhile;
                    endif; ?>
                    </div> <!-- /.content -->             
                </div> <!-- /.col -->
     </div> <!--/.row -->     
    </div><!-- container -->
<?php get_footer(); ?>