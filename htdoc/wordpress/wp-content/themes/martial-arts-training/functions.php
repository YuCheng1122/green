<?php
/**
 * Theme functions and definitions
 *
 * @package martial_arts_training
 */ 

if ( ! function_exists( 'martial_arts_training_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function martial_arts_training_enqueue_styles() {
		wp_enqueue_style( 'fitness-insight-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'martial-arts-training-style', get_stylesheet_directory_uri() . '/style.css', array( 'fitness-insight-style-parent' ), '1.0.0' );
		// Theme Customize CSS.
		require get_parent_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 'martial-arts-training-style',$fitness_insight_custom_style );
	}
endif;
add_action( 'wp_enqueue_scripts', 'martial_arts_training_enqueue_styles', 99 );

function martial_arts_training_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'martial-arts-training-featured-image', 2000, 1200, true );
	add_image_size( 'martial-arts-training-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'martial-arts-training' ),
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

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css', fitness_insight_fonts_url() ) );
}
add_action( 'after_setup_theme', 'martial_arts_training_setup' );

function martial_arts_training_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'martial-arts-training' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'martial-arts-training' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'martial-arts-training' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'martial-arts-training' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'martial-arts-training' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'martial-arts-training' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'martial-arts-training' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'martial-arts-training' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'martial-arts-training' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'martial-arts-training' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'martial-arts-training' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'martial-arts-training' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'martial_arts_training_widgets_init' );

function martial_arts_training_remove_my_action() {
    remove_action( 'admin_menu','fitness_insight_gettingstarted' );
    remove_action( 'after_setup_theme','fitness_insight_notice' );
}
add_action( 'init', 'martial_arts_training_remove_my_action');

function martial_arts_training_customize_register() {
  	global $wp_customize;

  	$wp_customize->remove_section( 'fitness_insight_pro' );	

	$wp_customize->remove_setting( 'fitness_insight_mid_section_icon1' );
	$wp_customize->remove_control( 'fitness_insight_mid_section_icon1' );

	$wp_customize->remove_setting( 'fitness_insight_mid_section_icon2' );
	$wp_customize->remove_control( 'fitness_insight_mid_section_icon2' );

	$wp_customize->remove_setting( 'fitness_insight_mid_section_icon3' );
	$wp_customize->remove_control( 'fitness_insight_mid_section_icon3' );

	$wp_customize->remove_setting( 'fitness_insight_mid_section_icon4' );
	$wp_customize->remove_control( 'fitness_insight_mid_section_icon4' );

}
add_action( 'customize_register', 'martial_arts_training_customize_register', 11 );

function martial_arts_training_customize( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

	$wp_customize->add_section('martial_arts_training_pro', array(
		'title'    => __('UPGRADE MARTIAL ARTS PREMIUM', 'martial-arts-training'),
		'priority' => 1,
	));

	$wp_customize->add_setting('martial_arts_training_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Martial_Arts_Training_Pro_Control($wp_customize, 'martial_arts_training_pro', array(
		'label'    => __('MARTIAL ARTS PREMIUM', 'martial-arts-training'),
		'section'  => 'martial_arts_training_pro',
		'settings' => 'martial_arts_training_pro',
		'priority' => 1,
	)));

}
add_action( 'customize_register', 'martial_arts_training_customize' );

function martial_arts_training_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 'martial_arts_training_enqueue_comments_reply' );

define('MARTIAL_ARTS_TRAINING_PRO_LINK',__('https://www.ovationthemes.com/wordpress/fitness-trainer-wordpress-theme/','martial-arts-training'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Martial_Arts_Training_Pro_Control')):
    class Martial_Arts_Training_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( MARTIAL_ARTS_TRAINING_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE MARTIAL ARTS PREMIUM','martial-arts-training');?> </a>
            </div>
            <div class="col-md">
                <img class="martial_arts_training_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('MARTIAL ARTS PREMIUM - Features', 'martial-arts-training'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'martial-arts-training');?> </li>
                    <li class="upsell-martial_arts_training"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'martial-arts-training');?> </li>                    
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( MARTIAL_ARTS_TRAINING_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE MARTIAL ARTS PREMIUM','martial-arts-training');?> </a>
            </div>
        </label>
    <?php } }
endif;