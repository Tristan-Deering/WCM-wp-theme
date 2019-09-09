<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WCMcbd
 */

?>

	<footer id="footer">
		<div class="footer-container">
			<div class="top-footer d-flex justify-content-between">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="" class="d-inline-block img-fluid logo">
				<span>
					Need to contact us?   
					<button class="d-inline-block hero-cta-button">Press me</button>
				</span>
			</div>
			<div class="lower-footer row">
				<div class="col-2 footer-menu">
					<p class="link-heading">Navigation</p>
					<a href="/" class="footer-link">Home</a>
					<a href="/shop" class="footer-link">Store</a>
					<a href="/shop" class="footer-link">CBD Research</a>
					<a href="/shop" class="footer-link">Wholesale</a>
					<a href="/shop" class="footer-link">Blog</a>
				</div>
				<div class="col-2 footer-menu">
					<p class="link-heading">Company</p>
					<a href="/shop" class="footer-link">About Us</a>
					<a href="/shop" class="footer-link">WCM Identity</a>
					<a href="/shop" class="footer-link">Terms & Conditions</a>
					<a href="/shop" class="footer-link">Privacy Policy</a>
				</div>
				<div class="col-5 footer-menu">
					<p class="link-heading">Support</p>
					<a href="/shop" class="footer-link">Contact</a>
					<a href="/shop" class="footer-link">Live Chat</a>
				</div>
				<div class="col-3 footer-menu">
					<p class="link-heading">Connect With Us</p>
					<a href="/shop" class="footer-link">Facebook</a>
					<a href="/shop" class="footer-link">Instagram</a>
				</div>
			</div>
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page div -->

<?php wp_footer(); ?>

</body>
</html>
