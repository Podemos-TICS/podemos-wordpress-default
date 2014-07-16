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



      <div class="portada_top">
       
		<div class="portada_presentation">

		
			   <div class="portada_box">
                   
				   <div class="portada_titulo">
							<h1><?php echo get_theme_mod( 'titulo_de_portada' ); ?></h1>
				   </div>
				   
				   <div class="portada_texto">
							<p><span lang="es-ES">
							
							<?php echo get_theme_mod( 'texto_de_portada' ); ?>
							
							</span></p>
				   </div>
				   
				 <div class="portada_link">
				 
				 <a href="<?php echo get_theme_mod( 'url_link_portada' ); ?>"><?php echo get_theme_mod( 'texto_link_portada' ); ?></a>
				 
				 </div>

               </div>
			   
			

        </div>

      </div>
	  
	    <?php endif; ?> 
 
     <div class="col-lg-9 col-md-9 col-sm-9 col-9 aparece">     
       <?php get_template_part('indexmain');  ?>                 
     </div> <!-- /.col -->

	 
     <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">
           <?php get_sidebar('post'); ?>
     </div><!--/.col --> 
	 
     <div class="col-lg-9 col-md-9 col-sm-9 col-9 desaparece">     
             <?php get_template_part('indexmain');  ?>     
     </div> <!-- /.col -->    
     
     </div> <!--/.row main-content -->
</div><!-- container -->
<?php get_footer('left-sidebar'); ?>