<?php

/**
 * WP Rig functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_rig
 */

define('WP_RIG_MINIMUM_WP_VERSION', '4.7');
define('WP_RIG_MINIMUM_PHP_VERSION', '7.0');

// Bail if requirements are not met.
if (version_compare($GLOBALS['wp_version'], WP_RIG_MINIMUM_WP_VERSION, '<') || version_compare(phpversion(), WP_RIG_MINIMUM_PHP_VERSION, '<')) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Setup autoloader (via Composer or custom).
if (file_exists(get_template_directory() . '/vendor/autoload.php')) {
	require get_template_directory() . '/vendor/autoload.php';
} else {
	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	function _wp_rig_autoload($class_name)
	{
		$namespace = 'WP_Rig\WP_Rig';

		if (strpos($class_name, $namespace . '\\') !== 0) {
			return false;
		}

		$parts = explode('\\', substr($class_name, strlen($namespace . '\\')));

		$path = get_template_directory() . '/inc';
		foreach ($parts as $part) {
			$path .= '/' . $part;
		}
		$path .= '.php';

		if (!file_exists($path)) {
			return false;
		}

		require_once $path;

		return true;
	}
	spl_autoload_register('_wp_rig_autoload');
}

// Load the `wp_rig()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func('WP_Rig\WP_Rig\wp_rig');

function custom_theme_logo_size()
{
	add_theme_support('custom-logo', array(
		'height'      => 100, // Set the desired height in pixels
		'width'       => 500, // Set the desired width in pixels
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme', 'custom_theme_logo_size');


// Fonts
function custom_theme_fonts()
{
	// Register custom fonts
	wp_enqueue_style('lobster-two', 'https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'custom_theme_fonts');
