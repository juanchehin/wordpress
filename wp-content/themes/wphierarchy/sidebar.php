<?php
if( ! is_active_sidebar('main-sidebar')) {
    return;
}

?>

<aside id="secondary" class="widget-area" role="complementaary">

    <?php dynamic_sidebar( 'main-sidebar'); ?>

</aside>