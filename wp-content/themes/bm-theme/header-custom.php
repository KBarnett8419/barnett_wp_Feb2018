<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BM-Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat|News+Cycle|Pontano+Sans" rel="stylesheet">
	<?php wp_head(); ?>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9853644664367566",
    enable_page_level_ads: true
  });
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bm-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding" style="text-align: center; padding-top: 30px; background-color: #fff;">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
			<div class="short-offering" style="text-align: center; color: #736966; font-family: 'Pontano Sans', sans-serif;">
				<h3><a href="http://localhost/barnettmarketing/services#website-creation-maintenance" style="text-decoration: none;">Custom Websites</a> &nbsp; <span>|</span>&nbsp;<a href="http://localhost/barnettmarketing/services#online-marketing-management" style="text-decoration: none;">  Social Media</a> &nbsp; <span>|</span>&nbsp;  <a href="http://localhost/barnettmarketing/services#online-marketing-management" style="text-decoration: none;">Email Management</a>&nbsp;<span>|</span>
					&nbsp; <a href="http://localhost/barnettmarketing/services#consultation" style="text-decoration: none;">Consultation</a></h3>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bm-theme' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
