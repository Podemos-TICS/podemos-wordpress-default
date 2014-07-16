<?php

/**

 * Default Page Header

 * Original from BootstrapWP

 * @author Gregor Hartmaier

 * @package WordPress

 * @subpackage Podemos Wordpress Theme

 */

?>

	<!DOCTYPE html>

        <!-- HTML5 -->

        <html <?php language_attributes();?>>

	<head>

	    <meta charset="<?php bloginfo('charset');?>">

	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	           

	    <title><?php wp_title(); ?></title>

           <?php // Favicon

                    $options = get_option('podemoswp_theme_options');

				if($options['favicon'] != '' ){

					echo '<link type="image/x-icon" href="'.get_template_directory_uri().'/assets/favicon.ico" rel="Shortcut Icon">'; 

			} ?>          

	    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link href="http://fonts.googleapis.com/css?family=Anaheim" type="text/css" rel="stylesheet" />

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

       

        <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>

        <script src='<?php echo get_template_directory_uri();?>/includes/fixed-header.js'></script>

    <!--        

    <link rel="apple-touch-icon-precomposed" sizes="144x144"

          href="<?php echo get_template_directory_uri();?>/assets/apple-touch-icon-144-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114"

          href="<?php echo get_template_directory_uri();?>/assets/apple-touch-icon-114-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72"

          href="<?php echo get_template_directory_uri();?>/assets/apple-touch-icon-72-precomposed.png">

    <link rel="apple-touch-icon-precomposed"

          href="<?php echo get_template_directory_uri();?>/assets/apple-touch-icon-57-precomposed.png">

    -->   

     <?php

	$options = get_option('podemoswp_theme_options');

        if($options['analytics'] != '' ){       

            echo ($options['analytics']);           

        }

     ?>

	    <?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

     <header>    

          <div id="top-header">

              <div class="container">            
                <div class="textocabecera">
                 <?php                

                    $options = get_option('podemoswp_theme_options');

                    if($options['top-callout'] != '' ){

                        echo ($options['top-callout']);	

                    }

                 ?>
				 </div>
				 
				  <?php get_template_part('css'); ?>

<?php

        if (function_exists('dynamic_sidebar')) {

            dynamic_sidebar("social-icons-header");

        }

        ?>  

				 <div class="header-menu-wrapper">

                       <?php                        

                        if ( has_nav_menu( 'header-menu' ) ) {                                                

                            wp_nav_menu(array(

                                'menu' => '',

                                'theme_location' => 'header-menu',

                                'depth' => 2,

                                'container' => false,

                                'menu_class' => 'header-menu',

                                'fallback_cb' => 'wp_page_menu',

                                'walker' => new wp_bootstrap_navwalker())

                            );                            

                        }

                        ?>

                    </div> 

               

              </div>

          </div>     

       <!-- Menu -->

       <div class="top-main-menu">

       <div class="container">

       <nav class="navbar navbar-default"  role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->

        <a href="<?php bloginfo('url'); ?>">

                           <?php

                                    $options = get_option('podemoswp_theme_options');                                    

                                    if($options['logo'] != '' ){

                                        echo '<img src="'.$options['logo'].'" class="img-responsive" alt="'.get_bloginfo( 'name' ).'">';                                       

                                    } 

                                    else {                                       

									    echo '<img src="'.get_template_directory_uri().'/assets/podemos-logo.png" class="img-responsive" alt="'.get_bloginfo( 'name' ).'">';

									} 

                                     ?>

                             </a>

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>              

            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <?php                

                if ( has_nav_menu( 'main-menu' ) ) {      

                    wp_nav_menu( array(

                        'menu'       => '',

                        'theme_location' => 'main-menu',

                        'depth'      => 2,

                        'container'  => false,

                        'menu_class' => 'nav navbar-nav',

                        'fallback_cb' => 'wp_page_menu',

                        'walker' => new wp_bootstrap_navwalker())

                    );                        

                }

                ?>

            </div><!-- /.navbar-collapse -->

            </nav>

        </div><!-- /.container -->    

       </div>

         </div>

</header>

<!-- End Header. Begin Template Content -->
