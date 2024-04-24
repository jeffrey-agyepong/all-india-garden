<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<footer id="colophon" class="site-footer">
	<div class="footer-flex">
		<div class="custom-logo">
			<img src="/wp-content/uploads/2024/04/indiagarden-logo-white.png" alt="India Garden Logo">
		</div>
		<div class="footer-info">
			<p>4820-76 Avenue, Edmonton</p>
			<p>For Reservations Please Call</p>
			<p>
				<a href="tel:780-468-2224">780 468 2224</a>
			</p>
		</div>
		<div class="footer-social">
			<a href="https://www.facebook.com/" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="Facebook">
			</a>
			<a href="https://www.instagram.com/" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="Instagram">
			</a>
			<a href="https://www.twitter.com/" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="Twitter">
			</a>
		</div>
	</div>
	<div class="footer-flex">
		<p>©2024 India Garden</p>
		<p><a href="https://jawebdesign.ca/" target="_blank">
				Developed by J.A Web Design
			</a></p>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>