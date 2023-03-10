<?php
/**
 * The header for our theme
 *
 * @subpackage Martial Arts Training
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'martial-arts-training' ); ?></a>
	<?php if( get_theme_mod('fitness_insight_theme_loader','') != ''){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div class="top_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-8 align-self-center">
						<?php if( get_theme_mod('fitness_insight_contact_enable') != ''){ ?>
							<?php if( get_theme_mod('fitness_insight_call_text') != '' || get_theme_mod('fitness_insight_call') != ''){ ?>
								<span class="mr-3"><i class="fas fa-phone mr-2"></i><strong><?php echo esc_html(get_theme_mod('fitness_insight_call_text','')); ?></strong>: <?php echo esc_html(get_theme_mod('fitness_insight_call','')); ?></span>
							<?php }?>
							<?php if( get_theme_mod('fitness_insight_email_text') != '' || get_theme_mod('fitness_insight_email') != ''){ ?>
								<span><i class="far fa-envelope mr-2"></i><strong><?php echo esc_html(get_theme_mod('fitness_insight_email_text','')); ?></strong>: <?php echo esc_html(get_theme_mod('fitness_insight_email','')); ?></span>
							<?php }?>
						<?php }?>
					</div>
					<div class="col-lg-3 col-md-4 align-self-center">
						<div class="links">
							<?php if( get_theme_mod('fitness_insight_social_enable') != ''){ ?>
								<?php if( get_theme_mod('fitness_insight_facebook') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('fitness_insight_facebook','')); ?>"><i class="fab fa-facebook-f"></i></a>
								<?php }?>
								<?php if( get_theme_mod('fitness_insight_twitter') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('fitness_insight_twitter','')); ?>"><i class="fab fa-twitter"></i></a>
								<?php }?>
								<?php if( get_theme_mod('fitness_insight_youtube') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('fitness_insight_youtube','')); ?>"><i class="fab fa-youtube"></i></a>
								<?php }?>
								<?php if( get_theme_mod('fitness_insight_instagram') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('fitness_insight_instagram','')); ?>"><i class="fab fa-instagram"></i></a>
								<?php }?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="header" class="py-3">
			<div class="container">
				<div class="wrap_figure">
					<div class="row">
						<div class="col-lg-3 col-md-5 col-sm-4 col-9 align-self-center">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $fitness_insight_blog_info = get_bloginfo( 'name' ); ?>
				              		<?php if( get_theme_mod('fitness_insight_logo_title',true) != '' ){ ?>
						                <?php if ( ! empty( $fitness_insight_blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						                  	<?php else : ?>
					                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					                  		<?php endif; ?>
						                <?php endif; ?>
						            <?php }?>
					                <?php
				                  		$fitness_insight_description = get_bloginfo( 'description', 'display' );
					                  	if ( $fitness_insight_description || is_customize_preview() ) :
					                ?>
					                <?php if( get_theme_mod('fitness_insight_logo_text',false) != '' ){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($fitness_insight_description); ?>
					                  	</p>
					                <?php } ?>
				              	<?php endif; ?>
						    </div>
						</div>
						<div class="col-lg-9 col-md-7 col-sm-8 col-3 align-self-center">
							<div class="menu_header">
							   	<?php if(has_nav_menu('primary')){?>
									<div class="toggle-menu gb_menu">
										<button onclick="fitness_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p><?php esc_html_e('Menu','martial-arts-training'); ?></p></button>
									</div>
								<?php }?>
						   		<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>