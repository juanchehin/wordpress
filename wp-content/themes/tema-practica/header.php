<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema practica</title>
    <?php wp_head(); ?>

</head>
<body 

<?php body_class(); ?>>
    <p>Header</p>

    <?php wp_nav_menu('menu') ?>
    
    <?php bloginfo(); ?>
</body>
</html>