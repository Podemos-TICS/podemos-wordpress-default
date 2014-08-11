<?php

/**

 * The default template for displaying content foreach entry in index.php, archiv.php etc. 

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

        <div class="row">

            <div class="col-md-12">

                <?php if (is_search()) : // Only display excerpts without thumbnails for search.  ?>		

                    <div class="entry-summary">

                        <?php the_excerpt(); ?>

                    </div><!-- end .entry-summary -->

                <?php else : ?>

                    <div class="entry-content">

                        <?php if (bootstrapwp_autoset_featured_img() !== false) : ?>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('echo=0'); ?>">

                                <?php echo bootstrapwp_autoset_featured_img(); ?>

                            </a>

                       <?php endif; ?>                      

                     <?php

                        $options = get_option('podemoswp_theme_options');

                        if ($options['excerpts']) {

                            echo the_excerpt();

                        } else {

                           echo the_content('<span class="read-more">Leer más</span>', 'podemoswp');

                        }

                        ?>

                    </div><!-- end .entry-content -->               

            <?php endif; ?>            

            </div><!-- end .col -->

        </div><!-- end .row -->

    </section>

</article><!-- /.post-->