<?php
/**
 * The template for displaying partnership page.
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper pt-0 pb-0" id="page-wrapper" id="main" role="main">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<div class="col-sm-6 v-center">
				<div class="asx-partnership-intro">
					<h1>Building an internet
	for everyone,
	one partner at a time.</h1>
					<p>Blurb about the importance of website accessibility and the risks
companies face if their website is not accessible. ASx Partner offers
advanced accessibility solutions to ensure online ADA compliance
and protect against potential legal action regarding website accessibility. </p>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="asx-puzzle-bg">

				</div>
			</div>

		</div> <!-- End of row -->

		<div class="row no-gutters asx-partnerships-image-container">
			<div class="col-sm-4 asx-partnerships-img-block">
				<div class="asx-partnerships-image-one">
					<div class="asx-block-type">
						Client Partners
					</div>
				</div>
				<div class="asx-img-overlay">
						<h2>Client <br /> Partners</h2>
						<p class="asx-partnership-txt">
							Excepteur sint occaecat cupidatat non 
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
			</div>

			<div class="col-sm-4 asx-partnerships-img-block">
				<div class="asx-partnerships-image-two">
					<div class="asx-block-type">
						Wholesale Partners
					</div>
				</div>
				<div class="asx-img-overlay">
						<h2>Wholesale <br /> Partners</h2>
						<p class="asx-partnership-txt">
							Excepteur sint occaecat cupidatat non 
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
			</div>

			<div class="col-sm-4 asx-partnerships-img-block">
				<div class="asx-partnerships-image-three">
					<div class="asx-block-type">
						Referral Partnerships
					</div>
				</div>
				<div class="asx-img-overlay">
						<h2> Referral<br /> Partnerships</h2>
						<p class="asx-partnership-txt">
							Excepteur sint occaecat cupidatat non 
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
			</div>
		</div> <!-- End of row -->

		<div class="row">
			<div class="col-sm-4 offset-sm-4 asx-partners-heading">
				<h2>Wholesale Partners</h2>
				<p class="secondary-text">
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div> <!-- End of row -->
	</div>

	<div class="container-fluid pl-0">
		<div class="row">
			<div class="col-sm-6">
				
					<div class="marketing-firms-img"></div>
			
			</div>
			<div class="col-sm-6">
				<div class="marketing-firms-content">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/speaker.png" alt="" class="img-fluid asx-speaker-icon"/>
					<h3 class="asx-marketing-firms-heading">Marketing Firms <span></span></h3>
					<p class="primary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
						minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<a class="btn secondary-btn mt-5" href="#">Learn More</a>
				</div>
			</div>
		</div>	 <!-- ENd of row -->

		<div class="row">
			<div class="col-sm-6">
				<div class="website-firms-content">
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/pc-icon.png" alt="" class="img-fluid asx-pc-icon"/>
					<h3 class="asx-website-firms-heading">Website design Firms <span></span></h3>
					<p class="primary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
						minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<a class="btn secondary-btn mt-5" href="#">Learn More</a>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="webdesign-firm-img"></div>
			</div>	
		</div>	<!-- End of row -->
		
	</div>

<div class="asx-sols-container">
	<div class="container-fluid pl-0 pr-0">
		<div class="row no-gutters">
			<div class="col-sm-6 offset-sm-3">
				
					<h2>Accessibility solutions</h2>
					<div class="asx-sols-sub-text">
						powered by advanced software and an expert team of accessibility professionals.  
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
					<a href="#" class="btn learn-more-secondary-btn">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
			</div>	
		</div>

	</div>	
</div>


</div>

<?php get_footer(); ?>	