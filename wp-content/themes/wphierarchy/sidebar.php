<?php
if( ! is_active_sidebar('main-sidebar')) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">

    <?php
        $args = [
            'type' => 'yearly',
            'limit' => 3,
            'show_post_count' => true,
            'order' => 'DESC'
        ];
        wp_get_archives( $args );
    ?>

    <?php wp_loginout(); ?>

    <?php dynamic_sidebar( 'main-sidebar'); ?>

    <p>Template: sidebar.php </p>

</aside>