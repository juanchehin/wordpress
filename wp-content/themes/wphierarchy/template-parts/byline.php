<p class="byline">
    <?php esc_html_e( 'Categories:', 'wptags' ); ?>
    <?php the_category(); ?>
    <?php the_tags( 'Tags:', ',' ); ?>
</p>