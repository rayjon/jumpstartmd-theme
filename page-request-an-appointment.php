<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package intended
 */

get_header(); ?>

	<div id="content-sidebar-wrap">
    	<div id="primary" class="content-area">
        	<div class="wrap">
    		<main id="main" class="site-main hfeed" role="main">
                <div id="content" class="entry-content">
    			<?php while ( have_posts() ) : the_post(); ?>
    
    				<?php get_template_part( 'content', 'page' ); ?>
    				
    				<section class="get-info-page-form">
        				    <?php get_template_part( 'forms/form', 'default' ); ?>
        				
        				    <div class="call-us">
        				        <p>or call us:</p>
                                <span id="numberassigned_1">1-855-JUMPSTART</span>
        				    </div>
    				</section>
    				
    				<?php
    					// If comments are open or we have at least one comment, load up the comment template
    					if ( comments_open() || get_comments_number() ) :
    						comments_template();
    					endif;
    				?>
    
    			<?php endwhile; // end of the loop. ?>
                </div><!-- #content -->

    		</main><!-- #main -->
        	</div>
    		<?php get_sidebar(); ?>
        </div><!-- #primary -->
	</div><!-- #content-sidebar-wrap-->

<?php get_footer(); ?>
