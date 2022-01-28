<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer role="footer" id="footer_main">
	<div class="wrapper-footer" id="wrapper-footer">

		<div class="<?php echo esc_attr( $container ); ?>">

			<div class="row">

				<div class="col">

					<div class="footer-title">Contact</div>

					<ul class="footer-links">
						<li>+1 (000) 000-0000</li>
						<li><a href="mailto:contact@mail.com">Contact@mail.com</a></li>
						<li>Address Line 1</li>
						<li>Address Line 2</li>
						<li>City, State ZIP</li>
					</ul>

				</div>

				<div class="col">
					<div class="footer-title">Content</div>
					<ul class="footer-links">
						<li><a href="<?php echo get_site_url(null, '/about/'); ?>">About Us</a></li>
						<li><a href="<?php echo get_site_url(null, '/partnerships/'); ?>">Partnerships</a></li>
						<li><a href="<?php echo get_site_url(null, '/client-partners/'); ?>">Client Partners</a></li>
						<li><a href="<?php echo get_site_url(null, '/wholesale-partners/'); ?>">Wholesale Partners</a></li>
						<li><a href="<?php echo get_site_url(null, '/whitelabel-partners/'); ?>">White Label Partners</a></li>
						<li><a href="<?php echo get_site_url(null, '/accessibility-blog/'); ?>">Accessibility Blog</a></li>
					</ul>
				</div>

				<div class="col">
					<div class="footer-title">Legal</div>
					<ul class="footer-links">
						<li><a href="<?php echo get_site_url(null, '/privacy-policy/'); ?>">Privacy Policy</a></li>
						<li><a href="<?php echo get_site_url(null, '/terms-conditions/'); ?>">Terms & Conditions</a></li>
					</ul>
				</div>

				<div class="col">
					<div class="footer-title">Help</div>
					<ul class="footer-links">
						<li><a href="<?php echo get_site_url(null, '/faq/'); ?>">FAQ</a></li>
						<li><a href="<?php echo get_site_url(null, '/contact-us/'); ?>">Contact Us</a></li>
					</ul>
				</div>

				<div class="col-sm-4">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/footer-white-logo.png" alt="" />
					<p class="mt-3 mb-0">Interested in becoming an ASx Partner ?</p>
					<p>Request a free quote today</p>

					<a href="#" class="footer-quote-btn">GET QUOTE</a>

					<div class="footer-social-links">
						<a href="https://www.facebook.com/a11yshield/" aria-label="facebook link"><i class="fa fa-facebook-f"></i></a>
						<a href="#" aria-label="instagram link"><i class="fa fa-instagram"></i></a>
						<a href="https://twitter.com/A11yShield" aria-label="twitter link"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				</div>

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->

	<div class="footer-bottom">
		<small>Copyright ©  2021 ASx Partner, Inc. All rights reserved.</small>
	</div>	

</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

