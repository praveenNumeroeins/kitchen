<?php
/**
 *
 * @package Insita Lite
 *
 */

get_header(); ?>

<?php

/**********
* Slider Sections
**********/

if( is_home() || is_front_page() ){
  $disablebanner = get_theme_mod( 'disable_slider', '1' );
  if( $disablebanner == '' ){
    $insita_lite_pages = array();
    for( $bnr=1; $bnr<4; $bnr++ ) {
      $getbnr = absint( get_theme_mod('slider-slide'.$bnr));
      if ( 'page-none-selected' != $getbnr ) {
        $insita_lite_pages[] = $getbnr;
      }
    }
    if( !empty($insita_lite_pages) ) :
      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'page',
        'post__in' => $insita_lite_pages,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) : 
      $bnr = 1;
?>
<div class="home-banner">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
      <?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $insita_lite_slideno[] = $i;
          $insita_lite_slidetitle[] = get_the_title();
          $insita_lite_slidelink[] = esc_url(get_permalink());
          ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <?php
          $bnr++;
        endwhile;
      ?>
    </div><!-- nivoslider -->

    <?php
      $k = 0;
      foreach( $insita_lite_slideno as $insita_lite_sln ){ ?>
      <div id="slidecaption<?php echo esc_attr( $insita_lite_sln ); ?>" class="nivo-html-caption">
        <?php
          if( get_theme_mod('slide_subheading') != '' ){
            echo '<h4>'.get_theme_mod('slide_subheading').'</h4>';
          }
        ?>
        <h2><a href="<?php echo esc_url($insita_lite_slidelink[$k] ); ?>"><?php echo esc_html($insita_lite_slidetitle[$k] ); ?></a></h2>
        <?php
          if( get_theme_mod('slide_moretext',__('Learn More','insita-lite') != '' )){
        ?>
          <a class="slide-button" href="<?php echo esc_url($insita_lite_slidelink[$k] ); ?>">
            <?php echo esc_html(get_theme_mod('slide_moretext',__('Lear More','insita-lite')));?>
          </a>
        <?php
          }
        ?>
      </div>
      <?php $k++;
      wp_reset_postdata();
      } 
      endif; 
      endif; 
    ?>
  </div><!-- slider wrapper -->
  <?php
    $hide_sclmed = get_theme_mod('disable_sclicn');
    $ins_scl_lbl = get_theme_mod('insita_scl_lbl');
    $ins_scl_fb = get_theme_mod('insita_fblink');
    $ins_scl_tw = get_theme_mod('insita_twlink');
    $ins_scl_in = get_theme_mod('insita_inlink');
    $ins_scl_li = get_theme_mod('insita_lkinlink');
    $ins_scl_gp = get_theme_mod('insita_gplslink');
    $ins_scl_yt = get_theme_mod('insita_ytubelink');

    if( $hide_sclmed == '' ){

      if( !empty( $ins_scl_lbl || $ins_scl_fb || $ins_scl_tw || $ins_scl_in || $ins_scl_li || $ins_scl_gp || $ins_scl_yt ) ) {
  ?>
      <div class="social-icons" data-title="<?php echo $ins_scl_lbl; ?>">
        <?php
          if( !empty( $ins_scl_fb ) ){
            echo '<a href="'.$ins_scl_fb.'" target="_blank" title="Facebook"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>';
          }
          if( !empty( $ins_scl_tw ) ){
            echo '<a href="'.$ins_scl_tw.'" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
          }
          if( !empty( $ins_scl_in ) ){
            echo '<a href="'.$ins_scl_in.'" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
          }
          if( !empty( $ins_scl_li ) ){
            echo '<a href="'.$ins_scl_li.'" target="_blank" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
          }
          if( !empty( $ins_scl_gp ) ){
            echo '<a href="'.$ins_scl_gp.'" target="_blank" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
          }
          if( !empty( $ins_scl_yt ) ){
            echo '<a href="'.$ins_scl_yt.'" target="_blank" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>';
          }
        ?>
      </div>
  <?php } } ?>
</div><!-- home banner -->
<?php  }
}

/**
** Home Page Section
*/
$disablefsec = get_theme_mod('insita_hide_fsec','1');
if( $disablefsec == '' ){
  echo '<div class="welcome-section"><div class="wrapper"><div class="flex flex-center">';
    if( get_theme_mod( 'welcome_page1',true ) !='' ){
      $welcome_query = new WP_Query(array('page_id' => get_theme_mod( 'welcome_page1' )));
      while( $welcome_query->have_posts() ) : $welcome_query->the_post();
        echo '<div class="col"><div class="welcome-content">'.( get_theme_mod('insita_welcome_subttl') != '' ? '<h4 class="subheading">'.get_theme_mod('insita_welcome_subttl').'</h4>':'').'<h2>'.get_the_title().'</h2><p>'.get_the_excerpt().'</p>'.( get_theme_mod('insita_welcome_more') != '' ? '<a href="'.get_the_permalink().'" class="welcome-more"><span>'.get_theme_mod('insita_welcome_more').'</span><i></i></a>':'').'</a></div></div><div class="col"><div class="welcome-thumb">'.get_the_post_thumbnail().'</div></div>';
      endwhile;
    }
  echo '</div></div></div>';
}

$disablessec = get_theme_mod( 'insita_hide_ser','1' );
if( $disablessec == '' ){
  echo '<div class="services"><div class="wrapper">'.( get_theme_mod('insita_service_title') != '' ? '<h2 class="section_title">'.get_theme_mod('insita_service_title').'</h2>':'').'<div class="flex">';
    for( $f = 1; $f<4; $f++ ) {
      if( get_theme_mod( 'ser_page'.$f,true ) !='' ){
        $feat_query = new WP_Query( array( 'page_id' => get_theme_mod( 'ser_page'.$f ) ) );
        while( $feat_query->have_posts() ) : $feat_query->the_post();
          if( has_post_thumbnail() ){
            $getpostthumb = '<div class="service-thumb">'.get_the_post_thumbnail().'</div><!-- boxes thumb -->';
          }
          echo '<div class="service-box"><div class="inner">'.$getpostthumb.'<div class="service-content"><span>'.$f.'</span><h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3><p>'.get_the_excerpt().'</p>'.( get_theme_mod('feat_more') != '' ? '<a href="'.get_the_permalink().'" class="service-more">'.get_theme_mod('feat_more').'</a>':'').'</div><!-- service content --></div><!-- inner --></div><!-- services -->';
        endwhile;
      }
    }
  echo '</div></div></div>';
}

?>

<div class="main-container">
  <div class="content-area">
    <div class="middle-align content_sidebar">
        <div class="site-main" id="sitemain">
          <?php
            if ( have_posts() ) :
              // Start the Loop.
              while ( have_posts() ) : the_post();
                /*
                * Include the post format-specific template for the content. If you want to
                * use this in a child theme, then include a file called called content-___.php
                * (where ___ is the post format) and that will be used instead.
                */
                get_template_part( 'content-page', get_post_format() );

              endwhile;
                // Previous/next post navigation.
                the_posts_pagination();
                wp_reset_postdata();

              else :
                // If no content, include the "No posts found" template.
                get_template_part( 'no-results' );

            endif;
          ?>
        </div>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
  </div>
<?php get_footer(); ?>