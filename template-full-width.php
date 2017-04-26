<?php
/**
 *
 * Template Name: Full Width Page
 * 
 */

get_header(); ?>

	<div id="content-sidebar-wrap">
    	<div id="primary" class="content-area">
        	<div class="wrap">
        		<main id="main" class="site-main" role="main">
                    <div id="content">
                        
                			<?php while ( have_posts() ) : the_post(); ?>
                
                				<?php get_template_part( 'content', 'page' ); ?>
                				    				
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
        </div><!-- #primary -->
	</div><!-- #content-sidebar-wrap-->

<?php get_footer(); ?>
