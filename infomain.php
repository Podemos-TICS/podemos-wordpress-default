

<?php if( get_theme_mod( 'activar_homebox' ) == '1') : ?>	
<!--BOXES -->
 <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper homebox1
 <?php if( get_theme_mod( 'box1_type' ) == 'video') : ?>	
 seesfuma
 <?php endif; ?> 
 ">

<?php if( get_theme_mod( 'box1_type' ) == 'video') : ?>	
<div class="boxcont">
<h2><?php echo get_theme_mod( 'box1_title' ) ?>  </h2>

<iframe width="100%" height="315" src="//www.youtube.com/embed/<?php echo get_theme_mod( 'home_video_url' ) ?>" frameborder="0" allowfullscreen></iframe>
</div><!--/Boxcont -->
<?php else : ?> 
<div class="boxcont">
<h2><?php echo get_theme_mod( 'box1_title' ) ?>  </h2>

<p> <?php echo get_theme_mod( 'box1_text' ) ?></p>

</div><!--/Boxcont --> 
   <?php if( get_theme_mod( 'activar_link_homebox1' ) == '1') : ?>	

 <div class="homeboxlinkcont">  
 <a class="homebox_link" href="<?php echo get_theme_mod( 'box1_url_link' ) ?>"><?php echo get_theme_mod( 'box1_text_link' ) ?></a>  
 </div>  
   <?php endif; ?>


   
<?php endif; ?> 



 </div><!--/.col --> 
 
 
 
 
 <div class="col-lg-9 col-md-9 col-sm-9 col-9 entire">     
        
     <div class="homebox2">
	  <div class="boxcont">
       <h2><?php echo get_theme_mod( 'box2_title' ) ?></h2>

       <p><?php echo get_theme_mod( 'box2_text' ) ?></p>
       </div><!--/Boxcont -->	
	    <div class="homeboxlinkcont">  
          <a class="homebox_link" href="<?php echo get_theme_mod( 'box2_url_link' ) ?>"><?php echo get_theme_mod( 'box2_text_link' ) ?></a>  
        </div>
	  
     </div><!--/homebox -->

<div class="homebox3">
  <div class="boxcont">
  <h2><?php echo get_theme_mod( 'box3_title' ) ?></h2>

       <p><?php echo get_theme_mod( 'box3_text' ) ?></p>
   </div><!--/Boxcont --> 
	    <div class="homeboxlinkcont">  
          <a class="homebox_link" href="<?php echo get_theme_mod( 'box3_url_link' ) ?>"><?php echo get_theme_mod( 'box3_text_link' ) ?></a>  
        </div>


</div>

<div class="homebox4">
  <div class="boxcont">
  <h2><?php echo get_theme_mod( 'box4_title' ) ?></h2>

       <p><?php echo get_theme_mod( 'box4_text' ) ?></p>
   </div><!--/Boxcont --> 
	    <div class="homeboxlinkcont">  
          <a class="homebox_link" href="<?php echo get_theme_mod( 'box4_url_link' ) ?>"><?php echo get_theme_mod( 'box4_text_link' ) ?></a>  
        </div>


</div>


<div class="homebox5">
 <div class="cabcont">
 <a href="<?php echo get_theme_mod( 'box5_url_link' ) ?>"><?php echo get_theme_mod( 'box5_text_link' ) ?></a>  
 </div>
<p><?php echo get_theme_mod( 'box5_text' ) ?></p>

</div>





	
 </div> <!-- /.col -->   
 
 
 
 <!-- FIN BOXES -->  
 <?php endif; ?> 
 
 
<div class="homecolor"> 
 
   <div class="homebox6">
   <h2><?php echo get_theme_mod( 'info_side_title' ) ?></h2>
   
   
    <div class="sidespacing">   
    <?php get_sidebar('info'); ?>
    </div>
	
   </div>

    
   <div class="homebox7">
     <h2><?php echo get_theme_mod( 'info_content_title' ) ?></h2>
     <div class="contentspacing"> 
    <?php get_sidebar('info-content'); ?> 

     </div>
   </div>
</div>   