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

	/*---------------------------Width -------------------*/
	
	$fitness_insight_theme_width = get_theme_mod( 'fitness_insight_width_options','full_width');

    if($fitness_insight_theme_width == 'full_width'){

		$fitness_insight_custom_style .='body{';

			$fitness_insight_custom_style .='max-width: 100%;';

		$fitness_insight_custom_style .='}';

	}else if($fitness_insight_theme_width == 'container'){

		$fitness_insight_custom_style .='body{';

			$fitness_insight_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

		$fitness_insight_custom_style .='}';

	}else if($fitness_insight_theme_width == 'container_fluid'){

		$fitness_insight_custom_style .='body{';

			$fitness_insight_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

		$fitness_insight_custom_style .='}';
	}

	/*---------------------------Scroll-top-position -------------------*/
	
	$fitness_insight_scroll_options = get_theme_mod( 'fitness_insight_scroll_options','right_align');

    if($fitness_insight_scroll_options == 'right_align'){

		$fitness_insight_custom_style .='.scroll-top button{';

			$fitness_insight_custom_style .='';

		$fitness_insight_custom_style .='}';

	}else if($fitness_insight_scroll_options == 'center_align'){

		$fitness_insight_custom_style .='.scroll-top button{';

			$fitness_insight_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

		$fitness_insight_custom_style .='}';

	}else if($fitness_insight_scroll_options == 'left_align'){

		$fitness_insight_custom_style .='.scroll-top button{';

			$fitness_insight_custom_style .='right: auto; left:5%; margin: 0 auto';

		$fitness_insight_custom_style .='}';
	}