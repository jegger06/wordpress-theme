<?php 
/*
	=======================================
		Include scripts
	=======================================

*/
// 1. Adding the resources (css, js and etc) that is saved on custom theme folder to add it on our pages

function styleblog_script_enqueue() {
	// Include CSS on our site
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/styleblog.css', array(), '1.0.0', 'all');
	// This will include the jquery files that the wordpress have
	wp_enqueue_script('jquery');
	// This is will include our scripts on the footer.. False it we will include it on the head
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/styleblog.js', array(), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'styleblog_script_enqueue');

// 1. End of code

/*
	=======================================
		Activate Menus
	=======================================

*/
// 2. Adding the menu - sub-menu on our dashboard

function styleblog_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'styleblog_theme_setup');

// 2. End of code

/*
	=======================================
		Theme support function
	=======================================

*/

// 3. Adding custom background for pages

add_theme_support('custom-background');

// 3. End of code

// 4. Adding the custom header feature

add_theme_support('custom-header');

// 4. End of code

// 5. Activating Post Thumbnail
add_theme_support('post-thumbnails');
// 5. End of code

// 6. Activating the post formats
add_theme_support('post-formats', array('aside','image','video'));
// 6. End of code


/*
	=======================================
		Sidebar function
	=======================================

*/

// 7. Activating the sidebar on the dashboard

function styleblog_widget_setup() {

	register_sidebar(
		array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</aside>',
			'before_title'	=> '<h1 class="widget-title">',
			'after_title'	=> '</h1>',
		)
	);

	register_sidebar(
		array(
			'name'	=> 'Sidebar 2',
			'id'	=> 'sidebar-2',
			'class'	=> 'custom',
			'description' => 'Aside',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</aside>',
			'before_title'	=> '<h1 class="widget-title">',
			'after_title'	=> '</h1>',
		)
	);

}

add_action('widgets_init','styleblog_widget_setup');

// 7. End of code

/*
	=======================================
		Adding the html5 theme support
	=======================================

*/

// 8. Adding the html5 theme support
add_theme_support('html5',array('search-form'));
// 8. End of code

/*
	=======================================
		Include Walker file
	=======================================
*/

require get_template_directory() . '/inc/walker.php';

/*
	=======================================
		Head function
	=======================================
*/

function styleblog_remove_version() {
	return '';
}

add_filter('the_generator', 'styleblog_remove_version');