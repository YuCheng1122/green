<?php

add_action( 'admin_menu', 'fitness_insight_gettingstarted' );
function fitness_insight_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'fitness-insight'), esc_html__('Theme Documentation', 'fitness-insight'), 'edit_theme_options', 'fitness-insight-guide-page', 'fitness_insight_guide');
}

function fitness_insight_admin_theme_style() {
   wp_enqueue_style('fitness-insight-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'fitness_insight_admin_theme_style');

if ( ! defined( 'FITNESS_INSIGHT_SUPPORT' ) ) {
define('FITNESS_INSIGHT_SUPPORT',__('https://wordpress.org/support/theme/fitness-insight/','fitness-insight'));
}
if ( ! defined( 'FITNESS_INSIGHT_REVIEW' ) ) {
define('FITNESS_INSIGHT_REVIEW',__('https://wordpress.org/support/theme/fitness-insight/reviews/','fitness-insight'));
}
if ( ! defined( 'FITNESS_INSIGHT_LIVE_DEMO' ) ) {
define('FITNESS_INSIGHT_LIVE_DEMO',__('https://www.ovationthemes.com/demos/fitness-insight/','fitness-insight'));
}
if ( ! defined( 'FITNESS_INSIGHT_BUY_PRO' ) ) {
define('FITNESS_INSIGHT_BUY_PRO',__('https://www.ovationthemes.com/wordpress/fitness-wordpress-theme/','fitness-insight'));
}
if ( ! defined( 'FITNESS_INSIGHT_PRO_DOC' ) ) {
define('FITNESS_INSIGHT_PRO_DOC',__('https://ovationthemes.com/docs/ot-fitness-insight-pro/','fitness-insight'));
}
if ( ! defined( 'FITNESS_INSIGHT_THEME_NAME' ) ) {
define('FITNESS_INSIGHT_THEME_NAME',__('Premium Fitness Theme','fitness-insight'));
}

/**
 * Theme Info Page
 */
function fitness_insight_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'fitness-insight'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( FITNESS_INSIGHT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'fitness-insight'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( FITNESS_INSIGHT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'fitness-insight'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','fitness-insight'); ?></h3>
					<p><?php esc_html_e('To step the fitness theme follow the below steps.','fitness-insight'); ?></p>

					<h4><?php esc_html_e('1. Setup Logo','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Site Identity >> Upload your logo or Add site title and site description.','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','fitness-insight'); ?></a>

					<h4><?php esc_html_e('2. Setup Contact Info','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Contact info >> Add your phone number and email address.','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fitness_insight_top') ); ?>" target="_blank"><?php esc_html_e('Add Contact Info','fitness-insight'); ?></a>

					<h4><?php esc_html_e('3. Setup Menus','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Menus >> Create Menus >> Add pages, post or custom link then save it.','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Add Menus','fitness-insight'); ?></a>

					<h4><?php esc_html_e('4. Setup Social Icons','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Social Media >> Add social links.','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fitness_insight_urls') ); ?>" target="_blank"><?php esc_html_e('Add Social Icons','fitness-insight'); ?></a>

					<h4><?php esc_html_e('5. Setup Footer','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Widgets >> Add widgets in footer 1, footer 2, footer 3, footer 4. >> ','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','fitness-insight'); ?></a>

					<h4><?php esc_html_e('5. Setup Footer Text','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Footer Text >> Add copyright text. >> ','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fitness_insight_footer_copyright') ); ?>" target="_blank"><?php esc_html_e('Footer Text','fitness-insight'); ?></a>

					<h3><?php esc_html_e('Setup Home Page','fitness-insight'); ?></h3>
					<p><?php esc_html_e('To step the home page follow the below steps.','fitness-insight'); ?></p>

					<h4><?php esc_html_e('1. Setup Page','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Pages >> Add New Page >> Select "Custom Home Page" from templates. >> Publish it.','fitness-insight'); ?></p>
					<a class="dashboard_add_new_page button-primary"><?php esc_html_e('Add New Page','fitness-insight'); ?></a>

					<h4><?php esc_html_e('2. Setup Slider','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Post >> Add New Post >> Add title, content and featured image >> Publish it.','fitness-insight'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Slider Settings >> Select post.','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fitness_insight_slider_section') ); ?>" target="_blank"><?php esc_html_e('Add Slider','fitness-insight'); ?></a>

					<h4><?php esc_html_e('3. Setup Services','fitness-insight'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Post >> Add New Post >> Add title, content and featured image >> Publish it.','fitness-insight'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Services Settings >> Select post','fitness-insight'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Services Settings >> Add Fontawesome icons classes ex: fas fa-envelope','fitness-insight'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fitness_insight_middle_section') ); ?>" target="_blank"><?php esc_html_e('Add Services Post','fitness-insight'); ?></a>
				</div>
          	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(FITNESS_INSIGHT_THEME_NAME); ?></h3>
				<img class="fitness_insight_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( FITNESS_INSIGHT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fitness-insight'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( FITNESS_INSIGHT_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'fitness-insight'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( FITNESS_INSIGHT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'fitness-insight'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'fitness-insight');?> </li>
                    <li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'fitness-insight');?> </li>
                   	<li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'fitness-insight');?> </li>
                   	<li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'fitness-insight');?> </li>
                   	<li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'fitness-insight');?> </li>
                   	<li class="upsell-fitness_insight"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'fitness-insight');?> </li>
                </ul>
        	</div>
		</div>
	</div>

<?php }?>
