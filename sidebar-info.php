<?php
/**
 * The Sidebar for Home/Info. Sidebar can be filled in the widget area. 
 */
?>
<section class="sidebar-page">
    <?php
    if (function_exists('dynamic_sidebar')) {   
        dynamic_sidebar("sidebar-info");     
    }?>
</section>