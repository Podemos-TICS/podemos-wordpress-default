<?php
/**
 * The Sidebar for Pages.
 * Original from BootstrapWP
 * @author Gregor Hartmaier
 * @package WordPress
 * @subpackage Podemos Wordpress Theme
 */
?>
<section class="sidebar-page">
    <?php
    if (function_exists('dynamic_sidebar')) {   
        dynamic_sidebar("sidebar-page");     
    }?>
</section>