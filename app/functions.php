<?php
// including stylesheets
function required_stylesheet()
{
	wp_enqueue_style('default_stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'required_stylesheet');

//jquery
function update_jQuery()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '3.3.1', true);
}
add_action('wp_enqueue_scripts', 'update_jQuery');

//including custom theme css and js
function custom_js_css()
{

	wp_enqueue_script('all_js', get_template_directory_uri() . '/js/all.min.js?v1.0', 'jquery', null, true);
	wp_enqueue_style('all_css', get_template_directory_uri() . '/css/main.min.css?v1.0');
	wp_localize_script('all_js', 'ajax_url', array(admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'custom_js_css');

//registering nav menus
function register_theme_menus()
{
	register_nav_menus(array(
		'header_nav' => __('Header Navigation'),
		'footer_nav' => __('Footer Navigation')
	));
}
add_action('init', 'register_theme_menus');

// add thumbnails to posts
add_theme_support('post-thumbnails');

// Create Sidebar
function wpdocs_theme_slug_widgets_init()
{
	register_sidebar(array(
		'name'          => __('Single Blog Post Sidebar', 'textdomain'),
		'id'            => 'single_sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

require get_template_directory() . '/load_more_blogs.php';


function my_acf_prepare_field($field)
{

	// Don't show this field once it contains a value.

	return false;
}
function remove_footer_admin()
{
	echo '<span id="footer-thankyou">Developed by <a href="https://fyber.co.uk" target="_blank">Fyber</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');


// Apply to fields named "example_field".
add_filter('acf/prepare_field/name=testimonials', 'my_acf_prepare_field');

//login details
function my_login_logo_url()
{
	return home_url();
}

//custom login
add_filter('login_headerurl', 'my_login_logo_url');

function custom_login_logo()
{
	echo '<style type="text/css">body#login h1 a,
	body.login h1 a { background: url(' . get_bloginfo('template_directory') . '/images/logo.png) 50% 50% no-repeat !important;   background-size: contain !important;}
	body.login {
		background-color: #8CD2F1;}
		body.login div#login form#loginform p.submit input#wp-submit {
			display: inline-block;
			padding: .0rem 3rem;

			border-radius: 3rem;
			color: white;
			transition: all 0.3s ease-in-out;
			text-decoration: none;
			position: relative;
			border: solid 0.3rem #8CD2F1;
			background-color:#8CD2F1;
		
	}
	body.login div#login form#loginform p.submit input#wp-submit:hover{
	
			background-color: white;
	
			color: #8CD2F1;
			text-decoration: none;
		
	}
	
	</style>';
}
add_action('login_head', 'custom_login_logo');
