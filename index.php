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

<?php if( get_theme_mod( 'activar_portada' ) == '1') : ?>	

             <?php get_template_part('portadamain');  ?>   

<?php endif; ?> 
 
<?php if( get_theme_mod( 'blog_info' ) == 'blog') : ?>	
            
             <?php get_template_part('blogmain');  ?>    
   
<?php else : ?>

             <?php get_template_part('infomain');  ?>    

<?php endif; ?> 
  
</div> <!--/.row main-content -->


</div><!-- container -->

<?php get_footer('left-sidebar'); ?>