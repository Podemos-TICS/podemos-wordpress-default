<?php

/**

 * Default Post Template

 * Original from BootstrapWP

 * @author Gregor Hartmaier

 * @package WordPress

 * @subpackage Podemos Wordpress Theme

 */

?>

<?php get_header(); ?>

<div class="container main">

    

     </div><!--/.row -->

     <div class="row main-content rightsid">

         <div class="col-lg-9 col-md-9 col-sm-9 col-9">     

             <div class="content main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

     		<?php get_template_part('content-single'); ?>

             <?php endwhile;

                  endif; ?>        

                    </div> <!-- /.content -->                  

                </div> <!-- /.col -->           

        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">           

            <?php get_sidebar('post'); ?>

        </div><!--/.col -->

     </div> <!--/.row main-content -->

</div><!-- container -->

<?php get_footer(); ?>