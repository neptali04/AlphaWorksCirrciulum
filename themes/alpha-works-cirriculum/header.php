<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AlphaWorksCirriculum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel='preload' href='https://static.everyaction.com/ea-actiontag/at.js' as='script' crossorigin='anonymous'>
	<link rel='preload' href='https://static.everyaction.com/ea-actiontag/at.min.css' as='style'>
	<script type='text/javascript' src='https://static.everyaction.com/ea-actiontag/at.js' crossorigin='anonymous'></script>
	<link rel='preload' href='https://nvlupin.blob.core.windows.net/designs/CustomStylesheet_e916c367317ce809fe567bc6f26ffcc07d2f11e7957fa45757713b55e0beb796.css' as='style'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bw-impact' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo(); 
				?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> -->

			<input type="checkbox" id="checkbox3" aria-controls="primary-menu" aria-expanded="false" class="checkbox3 visuallyHidden menu-toggle">
        <label for="checkbox3">
            <div class="hamburger hamburger3">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
            </div>
        </label>
	

			<!-- </button> -->
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
