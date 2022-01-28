<?php
/**
 * The template for displaying home page.
 *
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper pt-0" id="page-wrapper" id="main" role="main">

	<div class="<?php echo esc_attr( $container ); ?> pl-0 pr-0" id="content" tabindex="-1">

		<div class="row no-gutters">

			<div class="col-md-6 home-picture-block-one">
				

			</div>	


			<div class="col-md-6 v-center home-feature-col">
				<div class="home-feature-text-block">
					<h1>Building an internet for everyone, one partner at a time.</h1>
					<p class="mt-3">
						Blurb about the importance of website accessibility and the risks companies face if their website is not accessible. ASx Partner offers advanced accessibility solutions to ensure online ADA compliance and protect against potential legal action regarding website accessibility.
					</p>
					<a href="#" class="btn join-us-btn">Join Us</a>
					<div class="home-page-social-links">
						<ul>
							<li>
								<a href="#"  target="_blank" aria-label="twitter link">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#"  target="_blank" aria-label="facebook link">
									<i class="fa fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#"  target="_blank" aria-label="instagram link">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>	


			</div>
		</div> <!-- End of row -->

		<div class="row no-gutters">
			<div class="col-md-6 asx-solutions-content">
				<div class="asx-solutions">
					<h2>Accessibility solutions</h2>
					<div class="asx-sol-sub-text">powered by advanced software and an expert team of accessibility professionals.</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					</p>
					<a href="#" class="learn-more-btn">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				</div>	
			</div>
			<div class="col-md-6 home-picture-block-two">
				
			</div>	
		</div> <!-- End of row -->
		
	</div> <!-- End of container -->

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">
			<div class="col-md-6 offset-sm-3 text-center">
				<div class="asx-partnerships-info">
					<h2>ASx Partnerships</h2>
					<div class="asx-partner-sub-text">
						come in all shapes and sizes
					</div>
					<p class="">Whether you are an independent business focused solely on your company, a client based business working with other companies, or a business looking to directly offer accessibility solutions, ASx Partners has a partnership solution for you.</p>
				</div>
			</div>
		</div> <!-- End of row -->

		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-lg-7">
						<div class="home-picture-block-three">

						</div>
					</div>
					<div class="col-lg-5 v-center asx-partner-block-one-content">
						<div class="asx-partner-block-one">
							<h3> Wholesale partners</h3>
							<p class="mb-4">
								Excepteur sint occaecat cupidatat non proident, sunt in 
								culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<a href="#" class="learn-more-blue-btn">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>	
				</div>	<!-- ENd of row -->
			</div> <!-- End of col md 6 -->
			<div class="col-md-3">
				<div class="card asx-partner-block-two">
				  <img src="<?php echo get_stylesheet_directory_uri();?>/img/women-handshake.png" class="" alt="" />
				  <div class="card-body">
				    <h3 class="card-title">WHITE LABEL PARTNERS</h3>
				    <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    <a href="#" aria-label="Read more" class="btn rounded-arrow-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card asx-partner-block-three">
					<div class="card-body pt-0">
					    <h3 class="card-title">WHITE LABEL PARTNERS</h3>
					    <p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					    <a href="#" aria-label="Read more" class="btn rounded-arrow-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/men-handshake.png" class="" alt="" />
				</div>
			</div>	
		</div>	<!-- End of row --> 

		<div class="row">
			<div class="col-md-12 text-center">
				<a href="#" class="btn learn-more-green-btn">Learn More</a>
			</div>
		</div> <!-- ENd of row -->

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="asx-blog-sub-txt">Recent articles from</div>
				<h2 class="asx-blog-main-txt">The ASx Partner Accessibility Blog</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<section class="asx-recent-blogs">
				<div class="card-deck">
				  <div class="card">
				  	<div class="asx-blog-image">
				    	<img class="" src="<?php echo get_stylesheet_directory_uri();?>/img/blog-1.jpg" alt="" />
				    	<div class="asx-blog-category">Technology</div>
				    </div>
				    
				    <div class="card-body">
				      <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
				      <p class="card-text">
				      	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				      </p>
				      <p class="card-text">by John Smith | 22.01.2020</p>
				      <a href="#" aria-label="Read more" class="btn rounded-arrow-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				    </div>
				  </div>
				  <div class="card">
				  	<div class="asx-blog-image">
				    	<img class="" src="<?php echo get_stylesheet_directory_uri();?>/img/blog-2.jpg" alt="" />
				    	<div class="asx-blog-category-alt">Business</div>
				    </div>
				    <div class="card-body">
				      <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
				      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				      <p class="card-text">by John Smith | 22.01.2020</p>
				      <a href="#" aria-label="Read more" class="btn rounded-arrow-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				    </div>
				  </div>
				  <div class="card">
				  	<div class="asx-blog-image">
				    	<img class="" src="<?php echo get_stylesheet_directory_uri();?>/img/blog-3.jpg" alt="" />
				    	<div class="asx-blog-category">Lifestyle</div>
				    </div>
				    <div class="card-body">
				      <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
				      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				      <p class="card-text">by John Smith | 22.01.2020</p>
				      <a href="#" aria-label="Read more" class="btn rounded-arrow-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
				    </div>
				  </div>
				</div> <!-- End of card deck -->
				</section>
			</div> <!-- End of col sm 12 -->
		</div>	<!-- ENd of row -->

		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="#" class="btn secondary-btn">Visit The Accessibility Blog</a>
			</div>
		</div> <!-- End of row -->

	</div> <!-- ENd of container -->

	<div class="container-fluid pl-0 pr-0">
		<div class="row no-gutters">
			<div class="col-md-5 col-lg-4 home-picture-block-four">

			</div>
			<div class="col-md-7 col-lg-8 asx-quote-block-container">
				<div class="asx-quote-block">
					<div class="asx-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
					<div class="quote-text">
						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui oﬃcia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
					</div>
					<div class="quote-author">
						- Name Surname - Title, Company Name
					</div>
					<a href="#" class="btn learn-more-btn mt-5">View More</a>
				</div>
			</div>
		</div> <!-- End of row -->
	</div> <!-- End of container -->

	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-sm-12 asx-partners-heading">
				<h2>Join the ASx Partner community</h2>
				<div class="asx-partners-sub-txt">with these ﬁne companies</div>
			</div>
		</div> <!-- End of row -->

		<div class="row">
			<div class="col-sm-12">
				<div class="asx-partner-logo-carousel">
				<?php

                		$content = "";
                		 // query for the about page
					    $query = new WP_Query( 'pagename=our-partners' );
					    // "loop" through query (even though it's just one page) 
					    while ( $query->have_posts() ) : $query->the_post();
					      $content =  the_content();
					    endwhile;
					    // reset post data (important!)
					    wp_reset_postdata();


                ?>
				
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div> <!-- End of container -->

</div> <!-- End of wrapper -->	

<?php get_footer(); ?>