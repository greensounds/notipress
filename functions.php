<?php
//Theme Support
function wpnoticias_theme_support(){
	//Featured Images
	//Para que los thumbnail cambien de tamaño hay que volver a subir las imágenes
	add_theme_support('post-thumbnails');
	add_image_size( 'news-thumb', 400, 200, true);
	add_image_size('news-large', 790, 380, true);
	add_image_size('news-popular', 300, 250, true);


	//Nav Menu
	register_nav_menus(array(
		'primary'   => __('Primary menu')
	));
}

add_action('after_setup_theme', 'wpnoticias_theme_support');

function init_widgets($id){
	register_sidebar(array(
		'name' 	=> 'Sidebar',
		'id' 	=> 'sidebar',
		'before_widget'	=> '<div class="side-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));
}

add_action('widgets_init', 'init_widgets');