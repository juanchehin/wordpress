<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
    <header class="entry-header">

        <span class="dashicons dashicons-<?php echo get_post_format( $post->ID ); ?>"></span>
        
        <?php the_title( '<h1>', '</h1>'); ?>

    </header>

    <p> Content .php </p>
    <p>Post Number: <?php the_ID(); ?></p>

    <p>Post Title: <?php the_title(); ?></p>

    <p>The excerpt : <?php the_excerpt(); ?></p>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <?php 
        $attr = [
            'class' => 'alignright',
            'title' => get_the_title()
        ];


        the_post_thumbnail( 'medium', $attr );
        
    ?>

</article>