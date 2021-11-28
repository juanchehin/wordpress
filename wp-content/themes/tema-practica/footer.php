<?php bloginfo(); ?>

<?php
$array = array(
	'theme_location'  => 'tema-practica',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '',
    'item_spacing'    => 'preserve',
	'depth'           => 3,
	'walker'          => ''
);
 
wp_nav_menu( $array );

?>
 <!-- wp_nav_menu('items_wrap')  -->

<?php wp_footer(); ?>