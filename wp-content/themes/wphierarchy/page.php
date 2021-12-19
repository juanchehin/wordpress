<?php get_header(); ?>
    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content.php'); ?>

            <?php endwhile; endif; ?>

            <p>Template: page.php</p>

            <p> Permalink es <?php echo wp_get_shortlink(); ?> </p>

        </main>

    </div>

    <?php get_sidebar('page'); ?>

<?php get_footer(); ?>