<?php get_header(); ?>
    <div id="primary" class="content-area">
        
        <h1><?php single_post_title('Post : '); ?></h1>

        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content' , get_post_format() ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>

            <h1>Index.php</h1>

            <h2>Este es el extracto</h2>
            
            <?php the_excerpt(); ?>

        </main>

    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>