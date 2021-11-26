<?php get_header(); ?>

    <h1><p> Front-page.php </p></h1>

    <?php get_sidebar('front-page'); ?>

    <aside id="secondary" class="widget-area" role="complementary">

        <?php wp_loginout(); ?>

        <?php get_calendar( true,true ) ?>

        <?php $args = [
            "type" => "daily",
            "limit" => "10",
            "order" => "DESC"    
        ]; ?>

        <?php wp_get_archives(  $args ) ?>

        <?php wp_meta( ) ?>

    </aside>

<?php get_footer(); ?>