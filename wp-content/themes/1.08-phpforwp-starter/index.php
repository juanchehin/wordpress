<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">
  <!-- Start the loop here -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

      <!-- Display the_title and the_content here -->
      <h1> <?php the_title(); ?> </h1>

      <h1> <?php the_content(); ?> </h1>

    <?php  endwhile; else: // End while and start else ?>

      <!-- Display a 404 message here -->
      <?php _e( 'Some text to translate and display.', 'textdomain' ); ?>
    
    <?php endif; // End if ?>

  </div>

</body>
</html>
