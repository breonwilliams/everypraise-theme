<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		
		
		
		
			<?php do_action('before'); ?>
			<header role="banner">
				<div class="header-mid-area">
					<div class="container">
						<div class="row row-with-vspace site-branding">
							<div class="col-xs-6 site-title">
								<?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
									<div class="logo">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

											<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

										</a>
									</div>
								<?php else : ?>

									<h1 class="site-title-heading">
										<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
									</h1>

								<?php endif; ?>
								<div class="site-description">
									<small>
										<?php bloginfo('description'); ?>
									</small>
								</div>
							</div>
							<div class="col-xs-6 page-header-top-right">
								<div class="sr-only">
									<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
								</div>
								<?php if (is_active_sidebar('header-right')) { ?>
									<div class="pull-right">
										<?php dynamic_sidebar('header-right'); ?>
									</div>
									<div class="clearfix"></div>
								<?php } // endif; ?>
							</div>
						</div><!--.site-branding-->
					</div>
				</div>
				
				<div class=" main-navigation">
						<nav class="navbar navbar-custom" role="navigation">
							<div class="container">
								<div class="row">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
											<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="collapse navbar-collapse navbar-primary-collapse">
										<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
										<?php dynamic_sidebar('navbar-right'); ?>
									</div><!--.navbar-collapse-->
								</div>
							</div>
						</nav>
				</div><!--.main-navigation-->
			</header>
		<?php full_above_content_area(); ?>
			
			<div class="fluid-wrap">
			<div id="content" class="row-with-vspace site-content">