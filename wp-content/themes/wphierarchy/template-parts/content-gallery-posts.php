<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
    <header class="entry-header">

        <span class="dashicons dashicons-<?php echo get_post_format( $post->ID ); ?>"></span>
            
            <p><?php esc_html_e('Enjoy this gallery post!!'); ?></p>

        <?php the_title( '<h1>', '</h1>'); ?>

    </header>

    <p> Content-galerry .php </p>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <?php comments_template(); ?>

</article>