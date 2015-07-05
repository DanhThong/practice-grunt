<?php
/**
 * Travelify defining constants, adding files and WordPress core functionality.
 *
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 700;


if ( ! function_exists( 'travelify_setup' ) ):

add_filter('widget_text', 'do_shortcode');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
add_action( 'after_setup_theme', 'travelify_setup' );

 /**
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 */

function travelify_setup() {
	/**
	 * travelify_add_files hook
	 *
	 * Adding other addtional files if needed.
	 */
	do_action( 'travelify_add_files' );

	/* Travelify is now available for translation. */
	require( get_template_directory() . '/library/functions/i18n.php' );

	/** Load functions */
	require( get_template_directory() . '/library/functions/functions.php' );

	/** Load WP backend related functions */
	require( get_template_directory() . '/library/panel/themeoptions-defaults.php' );
	require( get_template_directory() . '/library/panel/theme-options.php' );
	require( get_template_directory() . '/library/panel/metaboxes.php' );
	require( get_template_directory() . '/library/panel/show-post-id.php' );

	/** Load Shortcodes */
	require( get_template_directory() . '/library/functions/shortcodes.php' );

	/** Load WP Customizer */
	require( get_template_directory() . '/library/functions/customizer.php' );

	/** Load Structure */
	require( get_template_directory() . '/library/structure/header-extensions.php' );
	require( get_template_directory() . '/library/structure/sidebar-extensions.php' );
	require( get_template_directory() . '/library/structure/footer-extensions.php' );
	require( get_template_directory() . '/library/structure/content-extensions.php' );

	/**
	 * travelify_add_functionality hook
	 *
	 * Adding other addtional functionality if needed.
	 */
	do_action( 'travelify_add_functionality' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in header menu location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'travelify' ) );

	// Add Travelify custom image sizes
	add_image_size( 'featured', 670, 300, true );
	add_image_size( 'featured-medium', 230, 230, true );
	add_image_size( 'slider', 1018, 460, true ); 		// used on Featured Slider on Homepage Header
	add_image_size( 'gallery', 474, 342, true ); 				// used to show gallery all images

	// This feature enables WooCommerce support for a theme.
	add_theme_support( 'woocommerce' );

	/**
	 * This theme supports custom background color and image
	 */
	$args = array(
		'default-color' => '#d3d3d3',
		'default-image' => get_template_directory_uri() . '/images/background.png',
	);
	add_theme_support( 'custom-background', $args );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * This theme supports add_editor_style
	 */
	add_editor_style();
}
endif; // travelify_setup

//Setup google analytics

function add_google_analytics() {
	$script = "<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-32178827-2', 'auto');
	  ga('send', 'pageview');

	</script>";
	echo $script;
}
// add_action('google_analytics', 'add_google_analytics' );

function add_google_tag_manager() {
	$script = "
	<!-- Google Tag Manager -->
	<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-K3CQMT\"
	height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K3CQMT');</script>
	<!-- End Google Tag Manager -->
	";
	echo $script;
}
add_action('google_tag_manager', 'add_google_tag_manager' );
if ( ! is_admin() ) {
add_filter( 'script_loader_tag',function ( $tag, $handle ) {
	if ( ! is_admin() ) {
    	return str_replace( ' src', ' defer="defer" src', $tag );
    }
}, 10, 2 );
}

function add_google_authorship() {
	echo "<link href='https://plus.google.com/u/0/117293839239740868050' rel='author'>";
}
add_action('add_google_authorship', 'add_google_authorship' );

?>