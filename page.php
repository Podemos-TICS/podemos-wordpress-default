<?php

/**

 * Template Name: Default Page

 * Original from BootstrapWP

 * @author Gregor Hartmaier

 * @package WordPress

 * @subpackage Podemos Wordpress Theme

 */

?>

<?php get_header(); ?>

<div class="container main">

   



     </div><!--/.row -->



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

     <div class="row main-content rightsid">

                <div class="col-lg-9 col-md-9 col-sm-9 col-9">     

                    <div class="content main">

                    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

                        <article class="post" id="post-<?php the_ID(); ?>">

                            <?php echo the_content(); ?>

                        </article>

                    </div> <!-- /.content -->                  

                </div> <!-- /.col -->

          <?php endwhile;

                  endif; ?>         

        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">           

            <?php get_sidebar('page'); ?>

        </div><!--/.col -->

     </div> <!--/.row main-content -->

</div><!-- container -->

<?php get_footer(); ?>