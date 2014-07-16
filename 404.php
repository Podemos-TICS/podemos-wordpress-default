<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php get_header(); ?>



     <div class="container main">
          
    
    <div class="row main-top">
        
        
  
    </div><!--/.row -->
      
    
     <div class="row main-content">
         
                <div class="col-lg-9 col-md-9 col-sm-9 col-9 aparece">
                    
                 <?php get_template_part('404main');  ?>  
                    
                </div> <!-- /.col -->
           
         
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper"> 
            
            <?php get_sidebar('page'); ?>

        </div><!--/.col -->
		
		
		  <div class="col-lg-9 col-md-9 col-sm-9 col-9 desaparece">
                    
                 <?php get_template_part('404main');  ?>  
                    
                </div> <!-- /.col -->
    
     </div> <!--/.row -->
        
        
        
        
        
    </div><!-- container -->
    
    
    
    
<?php get_footer('left-sidebar'); ?>
