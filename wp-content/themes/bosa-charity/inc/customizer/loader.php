<?php

function bosa_charity_default_styles(){

	// Begin Style
	$css = '<style>';

	$feature_posts_height = get_theme_mod( 'feature_posts_height', 320 );
	$css .= '
		.feature-posts-layout-one .feature-posts-image,
		.feature-posts-content-wrap .feature-posts-image {
			height: '. esc_attr( $feature_posts_height ) .'px;
			overflow: hidden;
		}
	';

	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
}
add_action( 'wp_head', 'bosa_charity_default_styles', 99 );