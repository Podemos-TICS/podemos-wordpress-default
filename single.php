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

     <div class="row main-content <?php if( get_theme_mod( 'blog_sidebar' ) == 'right') : ?>
	 rightsid <?php else: ?> leftsid<? endif; ?>">	 
	 
	 	 	 
	 <?php if( get_theme_mod( 'blog_sidebar' ) == 'left') : ?>
	 
         <div class="col-lg-9 col-md-9 col-sm-9 col-9 aparece">     
         <?php get_template_part('singlemain'); ?>                
         </div> <!-- /.col -->      				
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">           
        <?php get_sidebar('post'); ?>
        </div><!--/.col -->
		<div class="col-lg-9 col-md-9 col-sm-9 col-9 desaparece">     
        <?php get_template_part('singlemain'); ?>              
        </div> <!-- /.col -->    
		
	 <?php else: ?>

     	  <div class="col-lg-9 col-md-9 col-sm-9 col-9 ">     
         <?php get_template_part('singlemain'); ?>                
         </div> <!-- /.col -->      				
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">           
        <?php get_sidebar('post'); ?>
        </div><!--/.col -->
		
	 <?php endif; ?>
	 

     </div> <!--/.row main-content -->

</div><!-- container -->
<?php if( get_theme_mod( 'blog_sidebar' ) == 'right') : 
 get_footer(); 
else:
get_footer('left-sidebar'); 
endif; 
?>