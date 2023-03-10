<?php
/**
 * Custom header implementation
 */

function fitness_insight_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'fitness_insight_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 		 =>	false,
		'width'                  => 1200,
		'height'                 => 80,
		'flex-width'						 => true,
		'flex-height'						 => true,
		'wp-head-callback'       => 'fitness_insight_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'fitness_insight_custom_header_setup' );

if ( ! function_exists( 'fitness_insight_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see fitness_insight_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'fitness_insight_header_style' );
function fitness_insight_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        #header,.page-template-custom-home-page .wrap_figure{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		}";
	   	wp_add_inline_style( 'fitness-insight-style', $custom_css );
	endif;
}
endif;
