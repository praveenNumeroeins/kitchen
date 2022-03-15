<div class="theme-navigation">
	<div class="wrapper">
		<div class="flex">
			<div class="navigation">
				<div class="toggle">
					<a class="toggleMenu" href="#"><?php esc_html_e('Menu','insita-lite'); ?></a>
				</div><!-- toggle -->
				<nav id="main-navigation" class="site-navigation primary-navigation sitenav" role="navigation">
					<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
				</nav>
			</div><!-- navigation -->

			<?php if( get_theme_mod('insita_cta_btn') || get_theme_mod('insita_cta_btn_link') ) { ?>
			<div class="cta-button">
				<a href="<?php echo esc_url(get_theme_mod('insita_cta_btn_link')); ?>"><span><?php echo esc_html(get_theme_mod('insita_cta_btn')); ?></span></a>
			</div><!-- cta button -->
			<?php } ?>
		</div><!-- flex -->
	</div><!-- wrapper -->
</div><!-- col-right -->