<?php
/**
 * Template Name: Landing Page Template
 *
 * @description Landing Page Template 
 * @author iSearchMedia
 * @package Child
 * @subpackage Customizations
 */

remove_action( 'genesis_header', 'genesis_do_header' );
add_action('genesis_header','landing_page_header');

function landing_page_header() { 
?>
	<a href="http://www.jumpstartmd.com/" class="landing-header-logo"><img src="http://www.jumpstartmd.com/wp-content/themes/wallrich/images/logo-1.jpg"></a>
<?php
}

remove_action( 'genesis_after_header', 'genesis_do_nav' );

remove_action('genesis_footer', 'genesis_do_footer');
add_action('genesis_footer','landing_page_footer');

add_action( 'genesis_before_sidebar_widget_area', 'landing_page_form' );

function landing_page_form() {
    $jmd_gform_id = get_field('jmd_gravity_form_id');
    $jmd_promo_id = get_field('jmd_promo_code');
    $jmd_campaign_id = get_field('jmd_campaign_id'); ?>
    
    <div class="widget">
        <div class="sidebar-phone">
            <h4>Call to Get Started</h4>
            <span id="numberassigned_2" class="number"><?php the_field('jmd_phone_number'); ?></span>
        </div>
        <div class="landing-page-form">
            <h4 class="widget-title">Get Started</h4>
            <?php get_template_part( 'forms/form', 'default' ); ?>
        </div>
    </div>
    
<?php }

function landing_page_footer() { 
?>
	<footer>
		<div class="calltoday-footer">
			<h3>Call Today for More Information</h3>
	    	<span id="numberassigned_footer">
	        	<?php the_field('jmd_phone_number'); ?>
			</span>
		</div>
	</footer>

<?php
}

remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');

function custom_loop() { 
	if (have_posts()) : 
		while (have_posts()) : the_post(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<hr style="border:1px solid #EEE;">
			<div class="entry-content" style="margin-bottom:35px">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		<?php
		endwhile;
	endif; 	
}

genesis(); ?>