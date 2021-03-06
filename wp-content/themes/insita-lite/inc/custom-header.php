<?php
/**
 * @package Insita Lite
 * Setup the WordPress core custom header feature.
 *
 * @uses insita_lite_header_style()

 */
function insita_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'insita_lite_custom_header_args', array(
		'default-text-color'     => 'c1a45e',
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'insita_lite_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'insita_lite_custom_header_setup' );

if ( ! function_exists( 'insita_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see insita_lite_custom_header_setup().
 */
function insita_lite_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		#header{
			background-image: url(<?php echo esc_url(get_header_image()); ?>);
			background-position: center top;
		}
		.site-title h1 a { color:#<?php echo esc_attr(get_header_textcolor()); ?>;}
	<?php endif; ?>	
	</style>
	<?php
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
    <style type="text/css">
		.site-title {
			margin: 0 auto 0 0;
		}

		.site-title h1,
		.site-title p{
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
    </style>
	
    <?php
	
}
endif; // insita_lite_header_style