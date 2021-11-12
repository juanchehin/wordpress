<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
    <header class="entry-header">

        <span class="dashicons dashicons-<?php echo get_post_format( $post->ID ); ?>"></span>
        
        <?php the_title( '<h1>', '</h1>'); ?>

    </header>

    <p> Content .php </p>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <?php comments_template(); ?>

</article>