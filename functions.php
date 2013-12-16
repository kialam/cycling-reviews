<?php register_nav_menus(
	array(
		'primary' => 'Primary Navigation',	
	));
?>
<?php register_sidebar(
	array(
	'name' => 'Home Sidebar',
	'before_widget' => '<div class="ads six columns">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>', 
));
?>
<?php add_theme_support( 'post-thumbnails'); ?>