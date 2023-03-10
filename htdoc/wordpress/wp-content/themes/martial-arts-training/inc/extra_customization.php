<?php 

	$fitness_insight_sticky_header = get_theme_mod('fitness_insight_sticky_header');

	$fitness_insight_custom_style= "";

	if($fitness_insight_sticky_header != true){

		$fitness_insight_custom_style .='.menu_header.fixed{';

			$fitness_insight_custom_style .='position: static;';
			
		$fitness_insight_custom_style .='}';
	}

	$fitness_insight_logo_max_height = get_theme_mod('fitness_insight_logo_max_height');

	if($fitness_insight_logo_max_height != false){

		$fitness_insight_custom_style .='.custom-logo-link img{';

			$fitness_insight_custom_style .='max-height: '.esc_html($fitness_insight_logo_max_height).'px;';
			
		$fitness_insight_custom_style .='}';
	}