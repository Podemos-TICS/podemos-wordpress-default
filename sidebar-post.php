<?php
/**
 * The Sidebar for Posts.
 * Original from BootstrapWP
 * @author Gregor Hartmaier
 * @package WordPress
 * @subpackage Podemos Wordpress Theme
 */
?>
<section class="sidebar-posts">
    <?php
    if (function_exists('dynamic_sidebar')) {
        dynamic_sidebar("sidebar-post");       
    }?>
</section>
