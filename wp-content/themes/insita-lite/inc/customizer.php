<?php
/**
 * Insita Lite Theme Customizer
 *
 * @package Insita Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function insita_lite_customize_register( $wp_customize ) {
	
function insita_lite_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
	$wp_customize->get_setting( 'blogname' )->insita_lite         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->insita_lite  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
	    'selector' => '.site-title a',
	    'render_callback' => 'insita-lite_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => '.site-title p',
	    'render_callback' => 'insita-lite_customize_partial_blogdescription',
	) );

	$wp_customize->add_setting('insita_headerbg-color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'insita_headerbg-color',array(
			'label' => __('Header Background color','insita-lite'),
			'description'	=> __('Select background color for header.','insita-lite'),
			'section' => 'colors',
			'settings' => 'insita_headerbg-color'
		))
	);

	$wp_customize->add_setting('insita_headertxt-color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'insita_headertxt-color',array(
			'label' => __('Navigation Menu color','insita-lite'),
			'description'	=> __('Select text color for navigation menu.','insita-lite'),
			'section' => 'colors',
			'settings' => 'insita_headertxt-color'
		))
	);
		
	$wp_customize->add_setting('insita_color_scheme', array(
		'default' => '#c1a45e',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'insita_color_scheme',array(
			'label' => __('Color Scheme','insita-lite'),
			'description'	=> __('Select theme main color from here.','insita-lite'),
			'section' => 'colors',
			'settings' => 'insita_color_scheme'
		))
	);

	$wp_customize->add_setting('insita_sub_color_scheme', array(
		'default' => '#333333',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'insita_sub_color_scheme',array(
			'description'	=> __('Select theme sub color from here.','insita-lite'),
			'section' => 'colors',
			'settings' => 'insita_sub_color_scheme'
		))
	);
	
	$wp_customize->add_setting('insita_footer-color', array(
		'default' => '#c1a45e',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'insita_footer-color',array(
			'label' => __('Footer Background color','insita-lite'),
			'description'	=> __('Select background color for footer.','insita-lite'),
			'section' => 'colors',
			'settings' => 'insita_footer-color'
		))
	);

	/**
	**	Header Information
	**/

	$wp_customize->add_section(
        'insita_header_info',
        array(
            'title' => __('Header Information', 'insita-lite'),
            'priority' => null,
			'description'	=> __('Add information for main header here.','insita-lite'),	
        )
    );

    $wp_customize->add_setting('insita_head_mail_lbl',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_head_mail_lbl',array(
		'type'	=> 'text',
		'label'	=> __('Add E-mail address label here','insita-lite'),
		'section'	=> 'insita_header_info'
	));

    $wp_customize->add_setting('insita_head_mail',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_head_mail',array(
		'type'	=> 'text',
		'label'	=> __('Add E-mail address here','insita-lite'),
		'section'	=> 'insita_header_info'
	));

	$wp_customize->add_setting('insita_head_phn_lbl',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_head_phn_lbl',array(
		'type'	=> 'text',
		'label'	=> __('Add phone label here','insita-lite'),
		'section'	=> 'insita_header_info'
	));

	$wp_customize->add_setting('insita_head_phn',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_head_phn',array(
		'type'	=> 'text',
		'label'	=> __('Add phone number here','insita-lite'),
		'section'	=> 'insita_header_info'
	));

	$wp_customize->add_setting('insita_head_add_lbl',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_head_add_lbl',array(
		'type'	=> 'text',
		'label'	=> __('Add company address label here','insita-lite'),
		'section'	=> 'insita_header_info'
	));

	$wp_customize->add_setting('insita_head_add',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_head_add',array(
		'type'	=> 'text',
		'label'	=> __('Add company address here','insita-lite'),
		'section'	=> 'insita_header_info'
	));

	$wp_customize->add_setting('disable_headinfo',array(
		'default' => true,
		'sanitize_callback' => 'insita_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'disable_headinfo', array(
		'settings' => 'disable_headinfo',
		'section'   => 'insita_header_info',
		'label'     => __('Check this to hide section.','insita-lite'),
		'type'      => 'checkbox'
     ));

	/**
	**	Call to action Button
	**/
	$wp_customize->add_section(
        'insita_cta_btn',
        array(
            'title' => __('Call to Action Button', 'insita-lite'),
            'priority' => null,
			'description'	=> __('Display CTA button beside navigation','insita-lite'),	
        )
    );

    $wp_customize->add_setting('insita_cta_btn',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_cta_btn',array(
		'type'	=> 'text',
		'label'	=> __('Add CTA button label here','insita-lite'),
		'section'	=> 'insita_cta_btn'
	));

	$wp_customize->add_setting('insita_cta_btn_link',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('insita_cta_btn_link',array(
		'type'	=> 'url',
		'label'	=> __('Add CTA button link here.','insita-lite'),
		'section'	=> 'insita_cta_btn'
	));

	/**
	**	Social Links
	**/
	$wp_customize->add_section(
        'insita_social_link',
        array(
            'title' => __('Social Links', 'insita-lite'),
            'priority' => null,
			'description'	=> __('Display social media links on site','insita-lite'),	
        )
    );

    $wp_customize->add_setting('insita_scl_lbl',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_scl_lbl',array(
		'type'	=> 'text',
		'label'	=> __('Add text label here','insita-lite'),
		'section'	=> 'insita_social_link'
	));

	$wp_customize->add_setting('insita_fblink',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('insita_fblink',array(
		'type'	=> 'url',
		'label'	=> __('Add facebook link here.','insita-lite'),
		'section'	=> 'insita_social_link'
	));

	$wp_customize->add_setting('insita_twlink',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('insita_twlink',array(
		'type'	=> 'url',
		'label'	=> __('Add twitter link here.','insita-lite'),
		'section'	=> 'insita_social_link'
	));

	$wp_customize->add_setting('insita_inlink',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('insita_inlink',array(
		'type'	=> 'url',
		'label'	=> __('Add instagram link here.','insita-lite'),
		'section'	=> 'insita_social_link'
	));

	$wp_customize->add_setting('insita_lkinlink',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('insita_lkinlink',array(
		'type'	=> 'url',
		'label'	=> __('Add linkedin link here.','insita-lite'),
		'section'	=> 'insita_social_link'
	));

	$wp_customize->add_setting('insita_gplslink',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('insita_gplslink',array(
		'type'	=> 'url',
		'label'	=> __('Add google plus link here.','insita-lite'),
		'section'	=> 'insita_social_link'
	));

	$wp_customize->add_setting('insita_ytubelink',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('insita_ytubelink',array(
		'type'	=> 'url',
		'label'	=> __('Add youtube channel link here.','insita-lite'),
		'section'	=> 'insita_social_link'
	));

	$wp_customize->add_setting('disable_sclicn',array(
		'default' => true,
		'sanitize_callback' => 'insita_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'disable_sclicn', array(
		'settings' => 'disable_sclicn',
		'section'   => 'insita_social_link',
		'label'     => __('Check this to hide section.','insita-lite'),
		'type'      => 'checkbox'
     ));

	/**
	**	Slider Start
	**/

	$wp_customize->add_section(
        'slider_rotator',
        array(
            'title' => __('Slider', 'insita-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1420x720). Slider will work only when you select the static front page.','insita-lite'),	
        )
    );

    $wp_customize->add_setting('slide_subheading',array(
		'default'	=> __('Welcome To InSita','insita-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_subheading',array(
		'label'	=> __('Add slide sub heading text.','insita-lite'),
		'section'	=> 'slider_rotator',
		'setting'	=> 'slide_subheading',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('slider-slide1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-slide1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide one:','insita-lite'),
		'section'	=> 'slider_rotator'
	));

	$wp_customize->add_setting('slider-slide2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-slide2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide two:','insita-lite'),
		'section'	=> 'slider_rotator'
	));

	$wp_customize->add_setting('slider-slide3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-slide3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide three:','insita-lite'),
		'section'	=> 'slider_rotator'
	));

	$wp_customize->add_setting('slide_moretext',array(
		'default'	=> __('Explore More','insita-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_moretext',array(
		'label'	=> __('Add slider button text.','insita-lite'),
		'section'	=> 'slider_rotator',
		'setting'	=> 'slide_moretext',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('disable_slider',array(
		'default' => true,
		'sanitize_callback' => 'insita_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'disable_slider', array(
	   'settings' => 'disable_slider',
	   'section'   => 'slider_rotator',
	   'label'     => __('Check this to hide slider.','insita-lite'),
	   'type'      => 'checkbox'
    ));

	/**
	**	Homepage Sections
	**/

	$wp_customize->add_section(
        'insita_welcome_Sec',
        array(
            'title' => __('Welcome Section', 'insita-lite'),
            'priority' => null,
			'description'	=> __('Select page for display content in homepage. This section will be displayed only when you select the static front page.','insita-lite'),	
        )
    );

	$wp_customize->add_setting('insita_welcome_subttl',array(
		'default'	=> __('Welcome to InSita','insita-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_welcome_subttl',array(
		'label'	=> __('Add section sub title here','insita-lite'),
		'section'	=> 'insita_welcome_Sec',
		'setting'	=> 'insita_welcome_subttl',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('welcome_page1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('welcome_page1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for Welcome section','insita-lite'),
		'section'	=> 'insita_welcome_Sec'
	));

	$wp_customize->add_setting('insita_welcome_more',array(
		'default'	=> __('Read More','insita-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_welcome_more',array(
		'label'	=> __('Add read more button text.','insita-lite'),
		'section'	=> 'insita_welcome_Sec',
		'setting'	=> 'insita_welcome_more',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('insita_hide_fsec',array(
		'default' => true,
		'sanitize_callback' => 'insita_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'insita_hide_fsec', array(
		'settings' => 'insita_hide_fsec',
		'section'   => 'insita_welcome_Sec',
		'label'     => __('Check this to hide section.','insita-lite'),
		'type'      => 'checkbox'
     ));

    /**
	**	Setting up HomePage
	**/

	$wp_customize->add_section(
        'insita_service_sec',
        array(
            'title' => __('Services Section', 'insita-lite'),
            'priority' => null,
			'description'	=> __('Select pages for display content in homepage. This section will be displayed only when you select the static front page.','insita-lite'),	
        )
    );

	$wp_customize->add_setting('insita_service_title',array(
		'default'	=> __('','insita-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('insita_service_title',array(
		'label'	=> __('Add section title here','insita-lite'),
		'section'	=> 'insita_service_sec',
		'setting'	=> 'insita_service_title',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('ser_page1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('ser_page1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for first box','insita-lite'),
		'section'	=> 'insita_service_sec'
	));

	$wp_customize->add_setting('ser_page2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('ser_page2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for second box','insita-lite'),
		'section'	=> 'insita_service_sec'
	));

	$wp_customize->add_setting('ser_page3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('ser_page3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for third box','insita-lite'),
		'section'	=> 'insita_service_sec'
	));

	$wp_customize->add_setting('insita_hide_ser',array(
		'default' => true,
		'sanitize_callback' => 'insita_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'insita_hide_ser', array(
		'settings' => 'insita_hide_ser',
		'section'   => 'insita_service_sec',
		'label'     => __('Check this to hide section.','insita-lite'),
		'type'      => 'checkbox'
     ));
}
add_action( 'customize_register', 'insita_lite_customize_register' );	

function insita_lite_css(){
		?>
        <style>
			.cell-icon,
			.cell-data h3,
			.cell-data p,
			.cell-data a,
			.welcome-content a.welcome-more:hover span,
			.service-content h3 a{
				color:<?php echo esc_attr(get_theme_mod('insita_sub_color_scheme','#333333')); ?>;
			}
			.theme-navigation,
			.cta-button a:hover,
			.welcome-content a.welcome-more,
			.sitenav ul li.menu-item-has-children:hover > ul,
			.sitenav ul li.menu-item-has-children:focus > ul,
			.sitenav ul li.menu-item-has-children.focus > ul{
				background-color:<?php echo esc_attr(get_theme_mod('insita_sub_color_scheme','#333333')); ?>;
			}
			a, 
			.tm_client strong,
			.postmeta a:hover,
			#sidebar ul li a:hover,
			.blog-post h3.entry-title,
			a.blog-more:hover,
			#commentform input#submit,
			input.search-submit,
			.blog-date .date,
			.sitenav ul li.current_page_item a, 
			.sitenav ul li a:hover, 
			.sitenav ul li.current_page_item ul li a:hover,
			.home-banner h4,
			.home-banner .social-icons a:hover,
			.service-content span,
			.service-content h3 a:hover{
				color:<?php echo esc_attr(get_theme_mod('insita_color_scheme','#c1a45e')); ?>;
			}
			.home-banner a.slide-button,
			.cell-icon,
			h4.subheading:after,
			.nivo-controlNav a.active{
				border-color:<?php echo esc_attr(get_theme_mod('insita_color_scheme','#c1a45e')); ?>;
			}
			h3.widget-title,
			.nav-links .current,
			.nav-links a:hover,
			p.form-submit input[type="submit"],
			.home-banner a.slide-button:hover,
			.sitenav ul li:before,
			.cta-button a,
			h4.subheading,
			.welcome-content a.welcome-more:before,
			.welcome-content a.welcome-more:after,
			.service-content h3:after,
			.nivo-controlNav a.active{
				background-color:<?php echo esc_attr(get_theme_mod('insita_color_scheme','#c1a45e')); ?>;
			}
			.nivo-directionNav a{
				background-color:<?php echo esc_attr(get_theme_mod('insita_color_scheme','#c1a45e')); ?> !important;
			}
			#header{
				background-color:<?php echo esc_attr(get_theme_mod('insita_headerbg-color','#ffffff')); ?>;
			}
			.sitenav ul li a,
			.sitenav ul li.current_page_item ul li a{
				color:<?php echo esc_attr(get_theme_mod('insita_headertxt-color','#ffffff')); ?>;
			}
			.copyright-wrapper{
				background-color:<?php echo esc_attr(get_theme_mod('insita_footer-color','#c1a45e')); ?>;
			}
				
		</style>
	<?php }
add_action('wp_head','insita_lite_css');

function insita_lite_customize_preview_js() {
	wp_enqueue_script( 'insita-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'insita_lite_customize_preview_js' );