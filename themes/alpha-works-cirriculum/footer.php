<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AlphaWorksCirriculum
 */

?>

	<footer id="colophon" class="site-footer">

	<?php
		wp_nav_menu(array(
		'menu' => 'Nav Menu',
		'theme_location' => 'footer-menu',
		'menu_class' => 'footer-menu',
		'menu_id' => 'footer-id'
		))
	?>

	<div class="footerBox">
		<p>&copy; Bitwise Workforce Training</p>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
