   <div class="content main">

                   <header class="page-title">
                                        <h1><?php _e('This is Embarrassing', 'podemoswp'); ?></h1>
                                    </header>

                                    <p class="lead"><?php _e(
                                        'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.',
                                        'podemoswp'
                                    ); ?></p>

                                   <div class="well">
                                       <?php get_search_form(); ?>
                                   </div>
                                    
                                    
                                    
                                     <h2><?php _e('All Pages', 'podemoswp'); ?></h2>
                   <?php wp_page_menu(); ?>
                                     
                                      <?php the_widget('WP_Widget_Recent_Posts'); ?>

                   <h2><?php _e('Categories', 'podemoswp'); ?></h2>
                   <ul>
                       <?php wp_list_categories(
                       array(
                           'orderby' => 'count',
                           'order' => 'DESC',
                           'show_count' => 1,
                           'title_li' => '',
                           'number' => 100
                       )
                   ); ?>
                   </ul>

                    </div> <!-- /.content -->