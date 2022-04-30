<?php

/**
 * @package Akismet
 */
/*
Plugin Name: Search Bar 
Description: A custom search bar
Version: 1.0.0
Author: BELHADJ MANSOUR Haythem
*/

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('RECHERCHE_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Search bar function
function searchBar_sBar()
{ ?>

	<form role="search" class="search-form" id="searchform" method="get" action="<?= esc_url(home_url('/')); ?>">
		<input type="search" class="search-field" name="s" placeholder="Rechercher" value="<?php esc_attr(get_search_query()) ?>">
		<input type="submit" class="search-submit" value="Rechercher">
		<button type="submit" class="search-button"><span class="fas fa-search"></span></button>
	</form>

<?php }

add_shortcode( 'searchbar', 'searchBar_sbar' );

// function for call the stylesheet
function searchBar_style()
{
	wp_enqueue_style('searchBar-style', esc_url(RECHERCHE_PLUGIN_DIR . 'assets/css/style.css'),array('woocommerce-general'));
}

add_action('wp_enqueue_scripts', 'searchBar_style');

// function my_custom_search_template($template){
// 	global $wp_query;

// 	if(!$wp_query->is_search){
// 		return $template;
// 	} else {
// 		return RECHERCHE_PLUGIN_DIR . 'search.php';
// 	}
// }

// add_filter('template_include', 'my_custom_search_template');