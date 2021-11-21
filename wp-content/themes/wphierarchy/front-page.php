<?php get_header(); ?>
    <div id="primary" class="content-area extended">

        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content.php'); ?>

            <?php endwhile; else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>

            <?php wp_register( ); ?>

            <?php
                $args = [
                    'type' => 'yearly',
                    'limit' => 3,
                    'show_post_count' => true,
                    'order' => 'DESC'
                ];
                wp_get_archives( $args );
            ?>
    
            <?php echo wp_lostpassword_url(  ); ?>

            <?php if( !is_user_logged_in() ) : ?>

                <?php 

                    $args = [
                        'label_username' => 'Enter you username',
                        'label_password' => 'Enter your password'
                    ];

                    wp_login_form( $args );

                ?>

                <?php wp_login_form(  ); ?>

            <?php endif; ?>

            <p>Template: front-page.php</p>

            <?php get_sidebar('front-page'); ?>

        </main>

    </div>

<?php get_footer(); ?>