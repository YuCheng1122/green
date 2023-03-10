<?php
/**
 * Fitness Insight functions and definitions
 *
 * @subpackage Fitness Insight
 * @since 1.0
 */


if (!function_exists('fitness_insight_loop_columns')) {
		function fitness_insight_loop_columns() {
		return 3;
	}
}
add_filter('loop_shop_columns', 'fitness_insight_loop_columns');

function fitness_insight_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function fitness_insight_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function fitness_insight_sanitize_phone_number( $phone ) {
  return preg_replace( '/[^\d+]/', '', $phone );
}

function fitness_insight_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function fitness_insight_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function fitness_insight_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function fitness_insight_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<div class="link-more"><a href="%1$s" class="more-link">%2$s</a></div>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Read More<span class="screen-reader-text"> "%s"</span>', 'fitness-insight' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'fitness_insight_excerpt_more' );

function fitness_insight_setup() {

	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( "wp-block-styles" );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'fitness-insight-featured-image', 2000, 1200, true );
	add_image_size( 'fitness-insight-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fitness-insight' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', fitness_insight_fonts_url() ) );

}
add_action( 'after_setup_theme', 'fitness_insight_setup' );

function fitness_insight_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fitness-insight' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'fitness-insight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'fitness-insight' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'fitness-insight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'fitness-insight' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fitness-insight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'fitness-insight' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fitness-insight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'fitness-insight' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fitness-insight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'fitness-insight' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'fitness-insight' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'fitness_insight_widgets_init' );

function fitness_insight_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Yantramanav:wght@100;300;400;500;700;900';
	$font_family[] = 'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500';
	$font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

//Enqueue scripts and styles.
function fitness_insight_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'fitness-insight-fonts', fitness_insight_fonts_url(), array());

	// Bootstarp
	wp_enqueue_style( 'bootstrap-style', esc_url( get_template_directory_uri() ).'/assets/css/bootstrap.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'fitness-insight-style', get_stylesheet_uri() );

	wp_style_add_data('fitness-insight-style', 'rtl', 'replace');


	// Theme Customize CSS.
	require get_parent_theme_file_path( 'inc/extra_customization.php' );
	wp_add_inline_style( 'fitness-insight-style',$fitness_insight_custom_style );

	// font-awesome
	wp_enqueue_style( 'font-awesome-style', esc_url( get_template_directory_uri() ).'/assets/css/fontawesome-all.css' );

	// Block Style
	wp_enqueue_style( 'fitness-insight-block-style', esc_url( get_template_directory_uri() ).'/assets/css/blocks.css' );

	// Custom JS
	wp_enqueue_script( 'fitness-insight-custom.js', get_theme_file_uri( '/assets/js/fitness-insight-custom.js' ), array( 'jquery' ), true );

	// Nav Focus JS
	wp_enqueue_script( 'fitness-insight-navigation-focus', get_theme_file_uri( '/assets/js/navigation-focus.js' ), array( 'jquery' ), true );

	// Superfish JS
	wp_enqueue_script( 'superfish-js', get_theme_file_uri( '/assets/js/jquery.superfish.js' ), array( 'jquery' ),true );

	// Bootstarp JS
	wp_enqueue_script( 'bootstrap.js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ),true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fitness_insight_scripts' );

function fitness_insight_fonts_scripts() {
	$headings_font = esc_html(get_theme_mod('fitness_insight_headings_text'));
	$body_font = esc_html(get_theme_mod('fitness_insight_body_text'));

	if( $headings_font ) {
		wp_enqueue_style( 'fitness-insight-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );
	} else {
		wp_enqueue_style( 'fitness-insight-source-sans', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
	}
	if( $body_font ) {
		wp_enqueue_style( 'fitness-insight-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );
	} else {
		wp_enqueue_style( 'fitness-insight-source-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');
	}
}
add_action( 'wp_enqueue_scripts', 'fitness_insight_fonts_scripts' );

function fitness_insight_enqueue_admin_script( $hook ) {

	// Admin JS
	wp_enqueue_script( 'fitness-insight-admin.js', get_theme_file_uri( '/assets/js/fitness-insight-admin.js' ), array( 'jquery' ), true );

	wp_localize_script('fitness-insight-admin.js', 'fitness_insight_scripts_localize',
        array(
            'ajax_url' => esc_url(admin_url('admin-ajax.php'))
        )
    );
}
add_action( 'admin_enqueue_scripts', 'fitness_insight_enqueue_admin_script' );

// Enqueue editor styles for Gutenberg
function fitness_insight_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'fitness-insight-block-editor-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/css/editor-blocks.css' );

	// Add custom fonts.
	wp_enqueue_style( 'fitness-insight-fonts', fitness_insight_fonts_url(), array() );
}
add_action( 'enqueue_block_editor_assets', 'fitness_insight_block_editor_styles' );

function fitness_insight_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'fitness_insight_front_page_template' );

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_parent_theme_file_path( '/inc/typofont.php' );

require get_parent_theme_file_path( '/inc/wptt-webfont-loader.php' );

function fitness_insight_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
        wp_safe_redirect( admin_url("themes.php?page=fitness-insight-guide-page") );
    }
}
add_action('after_setup_theme', 'fitness_insight_notice');

function fitness_insight_add_new_page() {
  $edit_page = admin_url().'post-new.php?post_type=page';
  echo json_encode(['page_id'=>'','edit_page_url'=> $edit_page ]);

  exit;
}
add_action( 'wp_ajax_fitness_insight_add_new_page','fitness_insight_add_new_page' );

// Customiser Sections Dropdown

function fitness_insight_contact_dropdown(){
	if(get_theme_mod('fitness_insight_contact_enable') == true ) {
		return true;
	}
	return false;
}
function fitness_insight_social_dropdown(){
	if(get_theme_mod('fitness_insight_social_enable') == true ) {
		return true;
	}
	return false;
}

# Load scripts and styles.(fontawesome)
add_action( 'customize_controls_enqueue_scripts', 'fitness_insight_customize_controls_register_scripts' );

function fitness_insight_customize_controls_register_scripts() {
	
	wp_enqueue_style( 'fitness-insight-ctypo-customize-controls-style', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
}