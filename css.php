
<style type="text/css">

/* Fondo de página */ 



<?php if( get_theme_mod( 'blog_sidebar' ) == 'right') : ?>
body, <?php endif; ?>div.main-content.rightsid {
background: url(<?php echo get_template_directory_uri();?>/assets/rightsidback.jpg) 0% 0%/100% 100% !important;


}

<?php if( get_theme_mod( 'blog_sidebar' ) == 'left') : ?>
body, <?php endif; ?>div.main-content.leftsid {
background: url(<?php echo get_template_directory_uri();?>/assets/leftsidback.jpg) 0% 0%/100% 100% !important;

}


/* Icono Podemos Homebox5 */

div.homebox5 {
background: #97c2b8 url(<?php echo get_template_directory_uri();?>/assets/circulos_icono.png) no-repeat left center !important;

}


/* Sidebar */
<?php if( get_theme_mod( 'blog_sidebar' ) == 'left') : ?>
.sidebar-page {
text-align:right;

}
<?php endif; ?>

.sidebar-page li {
list-style:none!important;

}


/* Div Portada */
<?php if( get_theme_mod( 'blog_info' ) == 'blog') : ?>	
<?php if( get_theme_mod( 'blog_sidebar' ) == 'left') : ?>

.feat_box {
position: absolute;
right: 8px;
height: auto;
width: 270px;
top: 20px;
z-index: 15;
background:  url(<?php echo get_template_directory_uri();?>/assets/fondo-c.png);
-webkit-box-shadow: 0px 0px 3px 0 #60676F;
box-shadow: 0px 0px 3px 0 #60676F;
border:0px solid #000;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
}
<?php else: ?>
.feat_box {
position: absolute;
left: 8px;
height: auto;
width: 270px;
top: 20px;
z-index: 15;
background:  url(<?php echo get_template_directory_uri();?>/assets/fondo-c.png);
-webkit-box-shadow: 0px 0px 3px 0 #60676F;
box-shadow: 0px 0px 3px 0 #60676F;
border:0px solid #000;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
}
<?php endif; ?>
<?php else: ?>
.feat_box {
position: absolute;
right: 8px;
height: auto;
width: 270px;
top: 20px;
z-index: 15;
background:  url(<?php echo get_template_directory_uri();?>/assets/fondo-c.png);
-webkit-box-shadow: 0px 0px 3px 0 #60676F;
box-shadow: 0px 0px 3px 0 #60676F;
border:0px solid #000;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
}
<?php endif; ?>



.feat_box_tab {

height: 15px;
width: 270px;
}

.feat_box_txt {
height: auto;
width: 270px;

}

.feat_box_txt p {
font: 1.6em/1.1em "Alegreya Sans SC", Arial, Helvetica, sans-serif;
color: #EAEAEA;
text-transform: lowercase;
position: relative;
padding: 5px 15px 0px;
font-size:20px;
}

.feat_box a {
-webkit-border-radius: 2px;
border-radius: 2px;
font-size:20px!important;
width: 240px;
display: block;
background: #294946;
font: 1.8em/1.944em "Alegreya Sans SC", Arial, Helvetica, sans-serif;
color: #EAEAEA;
text-transform: lowercase;
margin: 0px auto;
text-align: center;
}

.feat_box_link {
position: relative;
width: 270px;
padding: 15px 0px;
}


 
.portada_top {
height: 450px;
width: 100%;
overflow: hidden;
position: relative;
background: #A0A4A9 url(<?php echo get_theme_mod( 'portada_podemos' ); ?>) no-repeat center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

<?php if( get_theme_mod( 'blog_info' ) == 'blog') : ?>	
<?php if( get_theme_mod( 'blog_sidebar' ) == 'left') : ?>
.portada_presentation {
overflow: hidden;
position: relative;
width: 37%;
left: 0px;
top: 0px;
background: url(<?php echo get_template_directory_uri();?>/assets/fondo-c.png);
height: 450px;
}

<?php else: ?>

.portada_presentation {
overflow: hidden;
position: relative;
width: 37%;
float:right;
background: url(<?php echo get_template_directory_uri();?>/assets/fondo-c.png);
height: 450px;
}


<?php endif; ?>



<?php else: ?>

.portada_presentation {
overflow: hidden;
position: relative;
width: 37%;
left: 0px;
top: 0px;
background: url(<?php echo get_template_directory_uri();?>/assets/fondo-c.png);
height: 450px;
}

<?php endif; ?>





.portada_box {
padding: 30px 40px;
}

.portada_titulo {
padding: 0px 0px 20px;
margin: 0px auto;
color:#fff;

}

.portada_texto {
margin: 0px auto;
}

.portada_titulo h1 {
height: auto;
width: 85%;
display: block;
font: 3em/1.2em 'FuturaStdCondensed', Arial, Helvetica, sans-serif;
color: #FAFAFA;
text-transform: uppercase;
font-size:32px!important;
}

.portada_texto p {
font-size: 1.2em;
color: #EAEAEA;
line-height: 1.4em;
display: block;
padding: 0px 0px 15px;
}

.portada_link {
padding: 10px 0px 0px;
margin: 0px auto;
}

.portada_link a {
-webkit-border-radius: 2px;
border-radius: 2px;

width: 70%;
min-width: 180px;
display: block;
background: url(<?php echo get_template_directory_uri();?>/assets/fondoboton.png);
font: 1.8em/1.944em "Alegreya Sans SC", Arial, Helvetica, sans-serif;
color: #C4C4C4;
text-transform: lowercase;
margin: 0px auto;
text-align: center;
font-size:20px!important;
}
</style>




<script>
var manzana = jQuery.noConflict();
manzana(document).ready(function(){
    <?php if( get_theme_mod( 'blog_info' ) == 'blog') : ?>
<?php if( get_theme_mod( 'blog_sidebar' ) == 'left') : ?>	
	manzana("#feat_box").css({"visibility":"hidden"});
    manzana("#feat_box").css({"margin-right":"-96%"
	});
	
    manzana("#feat_box").delay("50").show(0);
	function showtheamazingwelcome() {  
		manzana("#feat_box").css({"visibility":"visible"});		
		manzana("#feat_box").css({"visibility":"visible"});
   		manzana("#feat_box").animate({"margin-right":
'8px'
<?php else: ?>
	manzana("#feat_box").css({"visibility":"hidden"});
    manzana("#feat_box").css({"margin-left":"-96%"
	});
	
    manzana("#feat_box").delay("50").show(0);
	function showtheamazingwelcome() {  
		manzana("#feat_box").css({"visibility":"visible"});		
		manzana("#feat_box").css({"visibility":"visible"});
   		manzana("#feat_box").animate({"margin-left":
'8px'

<?php endif; ?>
<?php else: ?>
	manzana("#feat_box").css({"visibility":"hidden"});
    manzana("#feat_box").css({"margin-right":"-96%"
	});
	
    manzana("#feat_box").delay("50").show(0);
	function showtheamazingwelcome() {  
		manzana("#feat_box").css({"visibility":"visible"});		
		manzana("#feat_box").css({"visibility":"visible"});
   		manzana("#feat_box").animate({"margin-right":
'8px'
<?php endif; ?>

	}, 1000
);}
	 
setTimeout(showtheamazingwelcome, "50")
	  
  
		
});
</script>