<div class="left-area">
	<div class="site-title">
		<?php insita_lite_the_custom_logo(); ?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>
			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
			<p><?php echo esc_html($description); ?></p>
		<?php endif; ?>
	</div><!-- site title -->
</div><!-- col-left -->