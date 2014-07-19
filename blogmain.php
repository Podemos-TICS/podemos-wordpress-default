  
<?php if( get_theme_mod( 'blog_sidebar' ) == 'right') : ?>

    <div class="col-lg-9 col-md-9 col-sm-9 col-9">     
       <?php get_template_part('indexmain');  ?>                 
     </div> <!-- /.col -->

	 
     <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">
           <?php get_sidebar('home'); ?>
     </div><!--/.col --> 

  
<?php else: ?>

  <div class="col-lg-9 col-md-9 col-sm-9 col-9 aparece">     
       <?php get_template_part('indexmain');  ?>                 
     </div> <!-- /.col -->

	 
     <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">
           <?php get_sidebar('home'); ?>
     </div><!--/.col --> 
	 
     <div class="col-lg-9 col-md-9 col-sm-9 col-9 desaparece">     
             <?php get_template_part('indexmain');  ?>     
     </div> <!-- /.col -->    
	 
	 <?php endif; ?>