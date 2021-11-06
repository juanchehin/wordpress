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


    <?php

      // Create an array of post objects using the display_post function
      $name = "Juan";
      $array = array("foo", "bar", "hello", "world");

      // Loop through array of posts and display each one on the page

      // Call the display_title function and pass it the $post
      display_title( $array );

      /**
       * Custom function for displaying the title and content for a post
       *
       * @param string $title The title to be displayed
       */
      function display_title( $titles ) {

        // Echo an <h3> tag with the $title inside
        // echo '<h3> El array es :' . var_dump($title) . '</h3>';
        // echo var_dump($title);
        foreach ($titles as $title) {
          echo "Variable :  $title\n \n";
      }

      }

    ?>

    <h2>Welcome</h2>

    <p>My name is "<?php  echo $name;    ?>" </p>

  </div>

</body>
</html>
