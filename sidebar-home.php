<?php
/**
 * The Sidebar for Home. Sidebar can be filled in the widget area. 
 * Original from BootstrapWP
 * @author Gregor Hartmaier
 * @package WordPress
 * @subpackage Podemos Wordpress Theme
 */
?>
<div class="row">
    <div class="col-lg-4">
        
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("home-left");
        }
        ?>
    </div>
    <div class="col-lg-4">
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("home-middle");
        }
        ?>
    </div>
    <div class="col-lg-4">
        <?php
        if (function_exists('dynamic_sidebar')) {
            dynamic_sidebar("home-right");
        }
        ?>
    </div>
</div>