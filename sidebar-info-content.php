<?php
/**
 * The widget area for Home/Info-content. Sidebar can be filled in the widget area. 
 */
?>

    <?php
    if (function_exists('dynamic_sidebar')) {   
        dynamic_sidebar("sidebar-info-content");     
    }?>
