<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<!-- <header class="entry-header has-text-align-center<?php //echo esc_attr( $entry_header_classes ); ?>"> -->

	<!-- <div class="entry-header-inner section-inner medium"> -->

		<?php
		/**
		 * Allow child themes and plugins to filter the display of the categories in the entry header.
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param bool Whether to show the categories in header. Default true.
		 */
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

		// if ( true === $show_categories && has_category() ) {
		// 	?>

		<!-- // 	<div class="entry-categories">
		// 		<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
		// 		<div class="entry-categories-inner">
		// 			<?php //the_category( ' ' ); ?>
		// 		</div><!-- .entry-categories-inner -->
		<!-- // 	</div> -->
		<!-- .entry-categories -->
		 	<?php
		// }

?>
      
      

  <div class="container-fluid">
   <!--      <div class="row   align-self-center innersection" style="background-image:url('<?php //the_post_thumbnail_url(); ?>') ; height: 350px ; background-position: center; background-repeat: no-repeat;  " >
         <h1 class="title_innerpage text align-self-center"><?php  the_title(); ?></h1>
  </div> -->


        <div class="row   align-self-center innersection" style="background-image:url('<?php echo get_template_directory_uri(); ?>/html/image/innerpages.png') ; height: 350px ; background-position: center; background-repeat: no-repeat;  " >
 <!-- <img src="<?php //the_post_thumbnail_url(); ?>" alt=""/> -->
         <h1 class="title_innerpage text align-self-center"><?php  the_title(); ?></h1>
  </div>

</div>

            <section class="about-1">
                <div class="container">
                    <div class="row hover09">
                    <div class="col-lg-12 col-md-12 align-self-center">
                    <div class="about-content-1 ml-xl-70">
                                <div class="ot-heading is-dots">
                                    <span>[<?php  the_title(); ?>  ]</span>
                                </div>
                            </div>
                    </div>
                    <figure class="our_work_img">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </figure>

                    </div>
                </div>
            </section>
     
<?php 


		// if ( is_singular() ) {
		// 	the_title( '<h1 class="entry-title">', '</h1>' );
		// } else {
		// 	the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		// }

		// $intro_text_width = '';

		// if ( is_singular() ) {
		// 	$intro_text_width = ' small';
		// } else {
		// 	$intro_text_width = ' thin';
		// }

		// if ( has_excerpt() && is_singular() ) {
		// 	?>

		<!-- // 	<div class="intro-text section-inner max-percentage<?php //echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"> -->
		 		<?php //the_excerpt(); ?>
		<!-- // 	</div> -->

		<?php
		// }

		// // Default to displaying the post meta.
		// twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
