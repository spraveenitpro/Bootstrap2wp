<?php 


function theme_styles() {

	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css',  get_template_directory_uri().'/style.css' );
}
add_action('wp_enqueue_scripts','theme_styles');


function theme_js(){

	global $wp_scripts;
	wp_register_script('html5shiv','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','', false);
	wp_register_script('respond_js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','', false);

	$wp_scripts->add_data('html_shiv', 'conditional','lt IE 9' );
	$wp_scripts->add_data('respond_js', 'conditional','lt IE 9' );
	wp_enqueue_script('boostrap_js',get_template_directory_uri().'/js/bootstrap.js', array('jquery'),'',true);
	wp_enqueue_script('theme_js',get_template_directory_uri().'/js/theme.js', array('jquery', 'boostrap_js'),'',true);
}


add_action('wp_enqueue_scripts','theme_js');

//add_filter('show_admin_bar','__return_false');

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {

	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
	    )
	);
}

add_action('init', register_theme_menus);

 
/*************************************************************/
/* Create Widget Areas */
/*************************************************************/

function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __($name),
		'id'   => $id,
		'description' => __($description),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

create_widget('Front Page Left', 'front-left','on Home page front left');
create_widget('Front Page Center', 'front-center','on Home page front center');
create_widget('Front Page Right', 'front-right','on Home page front right');
create_widget('Page Sidebar', 'page','On Pages');
create_widget('Blog Sidebar', 'blog','On Blog');
 



?>