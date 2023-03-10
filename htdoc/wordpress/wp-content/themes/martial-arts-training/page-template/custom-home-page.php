<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
      <?php
        for ( $i = 1; $i <= 4; $i++ ) {
          $mod =  get_theme_mod( 'fitness_insight_post_setting' . $i );
          if ( 'page-none-selected' != $mod ) {
            $fitness_insight_slide_post[] = $mod;
          }
        }
         if( !empty($fitness_insight_slide_post) ) :
        $args = array(
          'post_type' =>array('post','page'),
          'post__in' => $fitness_insight_slide_post
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
      ?>
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
          <div class="carousel-caption">
            <h2><?php the_title();?></h2>
            <p><?php $excerpt = get_the_excerpt(); echo esc_html( fitness_insight_string_limit_words( $excerpt, 30 )); ?></p>
            <div class="home-btn">
              <a href="<?php the_permalink(); ?>"><?php echo esc_html('GET STARTED','martial-arts-training'); ?></a>
            </div>
          </div>
        </div>
        <?php $i++; endwhile;
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
      <div class="no-postfound"></div>
        <?php endif;
      endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-double-left"></i><?php echo esc_html('PREV','martial-arts-training'); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><?php echo esc_html('NEXT','martial-arts-training'); ?><i class="fas fa-angle-double-right"></i></span>
        </a>
    </div>
    <div class="clearfix"></div>
  </section>

  <?php if( get_theme_mod('fitness_insight_middle_sec_settigs1') != ''){ ?>
    <section id="middle-sec">
      <div class="row m-0">
        <?php
          for ( $mid_sec = 1; $mid_sec <= 4; $mid_sec++ ) {
            $mod =  get_theme_mod( 'fitness_insight_middle_sec_settigs'.$mid_sec );
            if ( 'page-none-selected' != $mod ) {
              $fitness_insight_post[] = $mod;
            }
          }
           if( !empty($fitness_insight_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $fitness_insight_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $mid_sec = 1;
        ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 p-0">
            <div class="classes-box">
              <div class="row m-0">
                <div class="col-lg-6 col-md-6 col-sm-6 p-0 align-self-center">
                  <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0 align-self-center">
                  <div class="classes-content-box">
                    <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
                    <div class="classes-inner-box">
                      <h4><?php the_title();?></h4>
                      <hr>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( fitness_insight_string_limit_words( $excerpt, 30 )); ?></p>
                      <div class="home-btn">
                        <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','martial-arts-training'); ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php $s++; endwhile;
        wp_reset_postdata();?>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
      </div>
    </section>
  <?php }?>
</main>

<?php get_footer(); ?>