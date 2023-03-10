<?php
/**
 * The header for our theme
 *
 * @subpackage Fitness Insight
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fitness-insight' ); ?></a>
	<?php if( get_theme_mod('fitness_insight_theme_loader','') != ''){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div id="header">
			<div class="container">
				<div class="wrap_figure">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 align-self-center">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $fitness_insight_blog_info = get_bloginfo( 'name' ); ?>

						                <?php if ( ! empty( $fitness_insight_blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
																	<?php if( get_theme_mod('fitness_insight_logo_title',true) != '' ){ ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
																	<?php }?>
						                  	<?php else : ?>
																	<?php if( get_theme_mod('fitness_insight_logo_title',true) != '' ){ ?>
					                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
																		<?php }?>
					                  		<?php endif; ?>
						                <?php endif; ?>

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
						<div class="col-lg-9 col-md-9 col-sm-12 align-self-center">
							<div class="top_header">
								<div class="row">
									<div class="col-lg-9 col-md-8 align-self-center">
										<?php if( get_theme_mod('fitness_insight_contact_enable') != ''){ ?>
											<?php if( get_theme_mod('fitness_insight_call_text') != '' || get_theme_mod('fitness_insight_call') != ''){ ?>
												<span><i class="fas fa-phone"></i><strong><?php echo esc_html(get_theme_mod('fitness_insight_call_text','')); ?></strong>: <?php echo esc_html(get_theme_mod('fitness_insight_call','')); ?></span>
											<?php }?>
											<?php if( get_theme_mod('fitness_insight_email_text') != '' || get_theme_mod('fitness_insight_email') != ''){ ?>
												<span><i class="far fa-envelope"></i><strong><?php echo esc_html(get_theme_mod('fitness_insight_email_text','')); ?></strong>: <?php echo esc_html(get_theme_mod('fitness_insight_email','')); ?></span>
											<?php }?>
										<?php }?>
									</div>
									<div class="col-lg-3 col-md-4 align-self-center">
										<?php		  		
									 		$fitness_insight_header_fb_target = esc_attr(get_theme_mod('fitness_insight_header_fb_target','true'));
									 		$fitness_insight_header_twt_target = esc_attr(get_theme_mod('fitness_insight_header_twt_target','true'));	
									 		$fitness_insight_header_ut_target = esc_attr(get_theme_mod('fitness_insight_header_ut_target','true'));
									 		$fitness_insight_header_ins_target = esc_attr(get_theme_mod('fitness_insight_header_ins_target','true'));
										 ?>
										<div class="links">
											<?php if( get_theme_mod('fitness_insight_social_enable') != ''){ ?>
											<?php if( get_theme_mod('fitness_insight_facebook') != ''){ ?>
												<a <?php if($fitness_insight_header_fb_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('fitness_insight_facebook','')); ?>"><i class="<?php echo esc_html(get_theme_mod('fitness_insight_facebook_icon','fab fa-facebook-f')); ?>"></i>
												</a>
											<?php }?>
											<?php if( get_theme_mod('fitness_insight_twitter') != ''){ ?>
												<a <?php if($fitness_insight_header_twt_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('fitness_insight_twitter','')); ?>">
													<i class="<?php echo esc_html(get_theme_mod('fitness_insight_twitter_icon','fab fa-twitter')); ?>"></i></a>
											<?php }?>
											<?php if( get_theme_mod('fitness_insight_youtube') != ''){ ?>
													<a <?php if($fitness_insight_header_ut_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('fitness_insight_youtube','')); ?>">
														<i class="<?php echo esc_html(get_theme_mod('fitness_insight_youtube_icon','fab fa-youtube')); ?>"></i></a>
											<?php }?>
											<?php if( get_theme_mod('fitness_insight_instagram') != ''){ ?>
												<a <?php if($fitness_insight_header_ins_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url(get_theme_mod('fitness_insight_instagram','')); ?>">
													<i class="<?php echo esc_html(get_theme_mod('fitness_insight_instagram_icon','fab fa-instagram')); ?>"></i>
													</a>
											<?php } }?>		
										</div>
									</div>
								</div>
							</div>
							<div class="menu_header">
							   	<?php if(has_nav_menu('primary')){?>
									<div class="toggle-menu gb_menu">
										<button onclick="fitness_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p><?php esc_html_e('Menu','fitness-insight'); ?></p></button>
									</div>
								<?php }?>
						   		<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
