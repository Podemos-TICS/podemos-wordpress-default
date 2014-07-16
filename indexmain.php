      <div class="content main">
          <?php
            if (have_posts()) : while (have_posts()) : the_post();

                    get_template_part('content', get_post_format());

                endwhile;
            endif;

            if (function_exists('wp_pagenavi')) {

                wp_pagenavi();
            } else {

                bootstrapwp_content_nav('nav-below');
            }
            ?>
        </div> <!-- /.content --> 