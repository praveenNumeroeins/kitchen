<?php
	/* store values into variables */
	$hide_headinfo = get_theme_mod('disable_headinfo');

	$ins_head_mail_lbl = esc_html(get_theme_mod('insita_head_mail_lbl'));
	$ins_head_mail = esc_url(get_theme_mod('insita_head_mail'));

	$ins_head_phn_lbl = esc_html(get_theme_mod('insita_head_phn_lbl'));
	$ins_head_phn = esc_html(get_theme_mod('insita_head_phn'));

	$ins_head_add_lbl = esc_html(get_theme_mod('insita_head_add_lbl'));
	$ins_head_add = esc_html(get_theme_mod('insita_head_add'));

	if( $hide_headinfo == '' ){
		if( $ins_head_mail_lbl || $ins_head_mail || $ins_head_phn_lbl || $ins_head_phn || $ins_head_add_lbl || $ins_head_add != ''){
?>
		<div class="right-area">
			<div class="flex">
				<?php if( $ins_head_mail_lbl || $ins_head_mail ) { ?>
				<div class="cell flex flex-center">
					<div class="cell-icon">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div><!-- cell icon -->
					<div class="cell-data">
						<h3><?php echo $ins_head_mail_lbl; ?></h3>
						<p><a href="mailto:<?php echo $ins_head_mail; ?>"><?php echo $ins_head_mail; ?></a></p>
					</div><!-- cell data -->
				</div><!-- cell -->
				<?php } if( $ins_head_phn_lbl || $ins_head_phn ) { ?>
				<div class="cell flex flex-center">
					<div class="cell-icon">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div><!-- cell icon -->
					<div class="cell-data">
						<h3><?php echo $ins_head_phn_lbl; ?></h3>
						<p><a href="tel:<?php echo $ins_head_phn; ?>"><?php echo $ins_head_phn; ?></a></p>
					</div><!-- cell data -->
				</div><!-- cell -->
				<?php } if( $ins_head_add_lbl || $ins_head_add ) { ?>
				<div class="cell flex flex-center">
					<div class="cell-icon">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div><!-- cell icon -->
					<div class="cell-data">
						<h3><?php echo $ins_head_add_lbl; ?></h3>
						<p><?php echo $ins_head_add; ?></p>
					</div><!-- cell data -->
				</div><!-- cell -->
				<?php } ?>
			</div><!-- flex -->
		</div><!-- right col -->
<?php }} ?>