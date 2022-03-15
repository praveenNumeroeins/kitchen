<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11"> -->

		<?php  wp_head(); ?>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Kitchen</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/html/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/owl.theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/lightgallery.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/woocommerce.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/css/royal-preload.css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/html/style.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/html/plugins/revolution/revolution/css/settings.css">   
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/html/plugins/revolution/revolution/css/navigation.css">

	</head>

	<body <?php body_class(); ?>>

		<?php
	//	wp_body_open();
		?>

<body class="royal_preloader">
    <div id="page" class="site">
        <header id="site-header" class="site-header header-transparent">
            <!-- Main Header start -->
            <div class="octf-main-header is-fixed">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col no-padding">
                                    <div id="site-logo" class="site-logo">
                                        <a href="<?php echo site_url();?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/html/image/logo.png" alt="Theratio" class="">
                                        </a>        
                                    </div>
                                </div>
                                <div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class=" current-menu-item current-menu-ancestor">
                                                <a href="<?php echo site_url();?>">Home</a>
                                           
                                            </li>
                                            <li ><a href="<?php echo site_url();?>#Aboutus">About Us</a>
                                        
                                            </li>
                                           <li class="menu-item-has-children"><a href="#">Our Work</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo site_url();?>#Kitchens">Kitchens</a></li>
                                                    <li><a href="<?php echo site_url();?>#Worktops">Worktops</a></li>
                                                    <li><a href="<?php echo site_url();?>#Appliances">Appliances</a></li>
                                                </ul>
                                                </li> 
                                           
                                            <li><a href="<?php echo site_url();?>#faq">FAQ's</a></li>
                                            <li><a href="<?php echo site_url();?>#Contactus">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right no-padding">
                                <!-- Call To Action -->
								<div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li>  <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                                <a href="tel:+44 1792 983 463">+44 1792 983 463</a>
                                            </li>
                                           <li class="menu-item Request"><a class="octf-btn menu-item-Request" href="#">Request Estimation</a>
                                            </li> 
                                        </ul>
                                    </nav>
                                </div>

                                    <div class="octf-btn-cta">
                                        <div class="octf-sidepanel octf-cta-header">
                                            <div class="site-overlay panel-overlay"></div>
                                            <div id="panel-btn" class="panel-btn octf-cta-icons">
                                                <i class="ot-flaticon-menu"></i>
                                            </div>
                                        </div>
                                        
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container-fluid">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col">
                            <div class="mlogo_wrapper clearfix">
                                <div class="mobile_logo">
                                    <a href="<?php echo site_url();?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/html/image/logo.png" alt="Theratio">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="octf-col justify-content-end">
                            <div class="octf-search octf-cta-header">
                                <div class="toggle_search octf-cta-icons">
                                    <i class="ot-flaticon-search"></i>
                                </div>
                                <!-- Form Search on Header -->
                                <div class="h-search-form-field collapse">
                                    <div class="h-search-form-inner">
                                        <form role="search" method="get" class="search-form">
                                            <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                            <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                        </form>
                                    </div>                                  
                                </div>
                            </div>
                            <div class="octf-menu-mobile octf-cta-header">
                                <div id="mmenu-toggle" class="mmenu-toggle">
                                    <button><i class="ot-flaticon-menu"></i></button>
                                </div>
                                <div class="site-overlay mmenu-overlay"></div>
                                <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                    <div class="mmenu-inner">
                                        <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                        <div class="mobile-nav">
                                            <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                                <li class=" current-menu-item current-menu-ancestor">
                                                    <a href="<?php echo site_url();?>">Home</a>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="our-services.html">Our Services</a></li>
                                                        <li><a href="our-team.html">Our Team</a></li>
                                                        <li><a href="single-team.html">Single Team</a></li>
                                                        <li><a href="our-process.html">Our Process</a></li>
                                                        <li><a href="our-studio.html">Our Studio</a></li>
                                                        <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="single-product.html">Single Product</a></li>
                                                                <li><a href="checkout-page.html">Checkout Page</a></li>
                                                                <li><a href="cart-page.html">Cart Page</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                        <li><a href="elements.html">Elements</a></li>
                                                        <li><a href="faq.html">FAQS</a></li>
                                                        <li><a href="cooming-soon.html">Coming Soon</a></li>
                                                        <li><a href="404-error.html">404 Error</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="servcies-detail-1.html">Design & Planning</a></li>
                                                        <li><a href="servcies-detail-2.html">Exterior Design</a></li>
                                                        <li><a href="servcies-detail-3.html">Custom Solutions</a></li>
                                                        <li><a href="servcies-detail-4.html">Furniture & Decor</a></li>
                                                        <li><a href="servcies-detail-5.html">Creating Concept</a></li>
                                                        <li><a href="servcies-detail-6.html">Author’s Control</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item-has-children"><a href="#">Portfolio Types</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-masonry.html">Portfolio Grid Masonry</a></li>
                                                                <li><a href="portfolio-no-gap.html">Portfolio Grid No Gap</a></li>
                                                                <li><a href="portfolio-under.html">Portfolio Info Under Image</a></li>
                                                                <li><a href="portfolio-metro.html">Portfolio Metro</a></li>
                                                                <li><a href="portfolio-metro-no-gap.html">Portfolio Metro No Space</a></li>
                                                                <li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
                                                                <li><a href="portfolio-slider.html">Portfolio Slider</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="#">Portfolio Layout</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-two-column.html">Two Columns</a></li>
                                                                <li><a href="portfolio-three-column.html">Three Columns</a></li>
                                                                <li><a href="portfolio-three-column-wide.html">Three Columns Wide</a></li>
                                                                <li><a href="portfolio-four-column-wide.html">Four Columns Wide</a></li>
                                                                <li><a href="portfolio-five-column-wide.html">Five Columns Wide</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="#">Portfolio Hover Types</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="portfolio-standar.html">Standar</a></li>
                                                                <li><a href="portfolio-detail-slider.html">Slider Images</a></li>
                                                                <li><a href="portfolio-left.html">Left Image</a></li>
                                                                <li><a href="portfolio-right.html">Right Image</a></li>
                                                                <li><a href="portfolio-small.html">Small Image</a></li>
                                                                <li><a href="portfolio-big.html">Big Image</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children"><a href="image-scale.html">Image-scale</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="image-scale.html">Image Scale</a></li>
                                                                <li><a href="show-overlay-info.html">Show Overlay Info</a></li>
                                                                <li><a href="hidden-overlay-info.html">Hidden Overlay Info</a></li>
                                                                <li><a href="background-solid.html">Background Solid</a></li>
                                                                <li><a href="hidden-1.html">Hidden 1</a></li>
                                                                <li><a href="hidden-2.html">Hidden 2</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog Listing</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="post.html">Blog Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contacts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



			<?php
			// Output the search modal (if it is activated in the customizer).
			// if ( true === $enable_header_search ) {
			// get_template_part( 'template-parts/modal-search' );
			// }
			?>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
	//	get_template_part( 'template-parts/modal-menu' );