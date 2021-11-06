<?php get_header(); ?>

    <div id="content">

    <?php 
        if(is_admin())
          echo 'es admin';
        else
          echo 'no es admin';
      
      ?>
      
      <!-- Static Front Page -->

      <!-- Blog Home -->

      <!-- Page (Not Front Page) -->

      <!-- Single Post -->

      <?php 
        if(is_single())
          echo 'es single';
        else
          echo 'no es single';
      
      ?>

      <!-- Single Attachment (Media) -->

      <!-- Category Archive -->

      <!-- Tag Archive -->

      <!-- Author Archive -->

      <!-- Date Archive -->

      <!-- 404 Page -->

    </div>

<?php get_footer(); ?>
