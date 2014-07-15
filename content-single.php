<?php

/**

 * The template for displaying content in the single.php.

 * Original from BootstrapWP

 * @author Gregor Hartmaier

 * @package WordPress

 * @subpackage Podemos Wordpress Theme

 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'podemoswp'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

        <aside class="entry-details">

            <p class="meta"><?php echo bootstrapwp_posted_on(); ?> <?php edit_post_link(__('Editar', 'podemoswp')); ?>

                <br/>

                <?php podemoswp_cats_tags(); ?> 

            </p>

        </aside><!--end .entry-details -->

    </header><!--end .entry-header -->

    <section class="post-content">

            <div class="entry-content">

                <?php 

                // only show if option set TODO                

                $options = get_option('podemoswp_theme_options');               

                    if($options['featured_single'] == true ){                                   

                         if (bootstrapwp_autoset_featured_img() !== false) { ?>

                         <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('echo=0'); ?>">

                         <?php echo bootstrapwp_autoset_featured_img(); ?>

                         </a>

                        <?php }                                   					

                    } ?>

            <?php echo the_content();?>

                </div>

	</section>



<?php comments_template(); ?>

</article><!-- /.post-->