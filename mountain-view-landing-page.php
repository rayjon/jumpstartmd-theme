<?php

/*
* Template Name: Mountain View Landing Page
* 
*
*/

// Remove header, navigation, breadcrumbs, footer widgets, footer 
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs');
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');

function custom_loop() { 
	if (have_posts()) : 
		while (have_posts()) : the_post(); ?>
			<div class="entry-content" style="margin-bottom:35px">
				<div class="grid-30 grid-parent">
					<img src="http://www.jumpstartmd.com/wp-content/themes/wallrich/images/jsmd-side-squares.jpg">
				</div>
				<div class="grid-70 right-grid">
					<div class="landing-title">
						<h1>Mountain View<br/>Grand Opening Celebration</h1>
					</div>
					
					<div class="grid-65 left-grid">
						<div class="fifty-off-text">
							<h2>GET 50% OFF</h2>
							<p>Start in Mountain View, Menlo Park, or Redwood City by <span>May 15th</span> and you'll <span>save $125.</span></p>
							<p>Call us at <span id="numberassigned_1">855-586-7782</span> or fill out Learn More from a free phone consultation. With swimsuit season just around the corner, now is the perfect time to get started. But, HURRY, our appointments fill up quickly and this offer ends soon!</p>
						</div><!-- end .fifty-off-text -->
						
						<div class="program-bullets">
							<h2>GET STARTED</h2>
							<p>Schedule your Program Launch and Comprehensive Metabolic Analysis. During this visit we’ll discuss your weight challenges, run a few tests and map out an individualized plan for you.</p>
							<h2>LOSE WEIGHT</h2>
							<p>Our team of nutrition, exercise and counseling experts will begin meeting privately with you each week, providing the knowledge, structure and support you need to succeed amid life’s ups and downs. You can do this – we’ll show you how.</p>
							<h2>MAINTAIN</h2>
							<p>At JumpstartMD, weight loss is only half the equation. Our post-goal weight maintenance support turns new healthy practices into permanent habits, helping our average maintenance patient regain less than one pound of their transformative weight loss!</p>
						</div>
					</div>
					<div class="grid-35 grid-parent">
						<h4 class="gform-title">Learn More</h4>
						<?php gravity_form( 
							47, 
							$display_title=false, 
							$display_description=false, 
							$display_inactive=false, 
							$field_values=null, 
							$ajax=false, 
							$tabindex); 
						?>
					
						<div class="call-box">
							<h2>Call to Get Started</h2>
							<h3><i class="fa fa-phone-square"></i> <span id="numberassigned_2">1-855-JUMPSTART</span></h3>
						</div>
					</div>
				</div>
				
				<div class="clear"></div>
				
				<footer>
					<div class="grid-100 footer">
						<h3>CALL TODAY TO SEE IF OUR PROGRAM IS RIGHT FOR YOU</h3>
						<div class="footer-number">
							<span id="numberassigned_footer">1-855-JUMPSTART</span>
						</div>
					</div>
				</footer>
			</div><!-- .entry-content -->
		<?php
		endwhile;
	endif; 	
}

genesis();