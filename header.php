<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PKSD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <meta name="description" content="" /> -->
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="canonical" href="">
	<link rel="shortcut icon" href="<?php the_field('site_favicon','option'); ?>" type="image/ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="google-site-verification" content="<?php the_field('site_verification_code','option'); ?>" />
	<base href="<?php echo get_site_url();?>/">
	<link href="<?php echo get_template_directory_uri()?>/includes/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="<?php echo get_template_directory_uri()?>/includes/css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri()?>/includes/src/css/ilightbox.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri()?>/includes/css/yamm.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri()?>/includes/css/local.css" rel="stylesheet"> -->
	<link href="<?php echo get_template_directory_uri()?>/includes/css/local.min.css" rel="stylesheet">
	<!-- <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-3523640-1', 'auto');
	  ga('send', 'pageview');

	</script> -->
	<!-- Google Scripts & Analytics Code -->
	<?php the_field('google_analytics','option');?>
	<!-- Google Tag Manager -->

	<?php the_field('google_tag_manager','option');?>
	<!-- End Google Tag Manager -->

	<style>
	.sub-menu {
	    display: none;
	}
	</style>
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pksd' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div itemprop="image" itemscope itemtype="http://schema.org/ImageObject" class="logo"> <a href="<?php echo get_site_url();?>"><img itemprop="contentUrl" src="<?php the_field('site_logo', 'option'); ?>" alt="Wisconsin Accident Injury Lawyers PKSD Law" title="PKSD Law" class="img-responsive phone" /></a> <span itemprop="name" content="Pitman, Kalkhoff, Sicula &amp; Dentice, S.C."></span> <span itemprop="description" content="The logo for Wisconsin personal injury law firm Pitman, Kalkhoff, Sicula &amp; Dentice"></span> </div>
					</div>
					<div class="col-md-6 phone hidden-xs">
						<p><a href="<?php the_field('header_right_image_link', 'option'); ?>" title="Read About The PKSD Guarantee">
							<img src="<?php the_field('header_right_image', 'option'); ?>" alt="PKSD Guarantee" class="img-responsive pull-right" /></a><br>
							<?php the_field('header_right_call_title', 'option'); ?> <a href="tel:<?php the_field('header_right_phone_number', 'option'); ?>" onClick="ga('send', 'event', 'Phone', 'Click', 'Header');"><?php echo get_field('header_right_phone_number', 'option'); ?></a><br>
							<?php the_field('header_right_bottom_title', 'option'); ?></p>
					</div>
					<div class="col-md-12 phone hidden-sm hidden-md hidden-lg">
			    <p class="mtop">
			       <a class="btn btn-large btn-danger" href="tel:<?php the_field('header_right_phone_number', 'option'); ?>" onclick="ga('send', 'event', 'Phone', 'Click', 'Header');">
			           <img src="<?php echo get_field('mobile_contact_image', 'option'); ?>" alt="phone" class="loading" data-was-processed="true"> <?php echo get_field('mobile_contact_title', 'option'); ?></a> 
			           <picture>
			               <!-- <source srcset="assets/images/headshot-mobile.webp" type="image/webp">
			               <source srcset="assets/images/headshot-mobile.jpg" type="image/jpg"> -->
			               <img src="<?php echo get_field('mobile_image', 'option'); ?>" alt="Jeff Pittman" class="loading" data-was-processed="true" width="45" height="45">
			           </picture>
			           <!--<img src="assets/images/headshot-mobile.jpg" height="45" width="45" alt="Jeff Pittman" />-->
			       
			    </p>
			</div>
				</div>



			</div>
		</div><!-- .site-branding -->
		<nav class="navbar yamm" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topnav"><span class="sr-only">Toggle navigation</span><span class="pull-right">MENU</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </button>
			</div>
			<div class="collapse navbar-collapse" id="topnav">
				<?php
	                wp_nav_menu(
	                    array(
	                        'theme_location' => 'menu-1',
	                        'container'       => false, 
	                        // 'menu_id'        => 'secondary-men
	                        'depth'             => 3,
	                        'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
	                    )
	                );
	            ?>
				<?php
					if(get_field('header_search_option', 'option') == 1 ){
						
						get_search_form();

					} ?>
			</div>

		</div>
    </nav>
</header><!-- #masthead -->
