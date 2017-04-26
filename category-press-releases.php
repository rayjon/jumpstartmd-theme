<?php
 
/**
 * Template Name: Testimonial Archives
 * Description: Used as a page template to show page contents, followed by a loop through a CPT archive  
 */
 
remove_action ('genesis_loop', 'genesis_do_loop'); // Remove the standard loop
add_action( 'genesis_loop', 'custom_do_loop' ); // Add custom loop
 
function custom_do_loop() {
	$args = array(
		'post_type' => 'post', // enter your custom post type
		'cat' => '249',
		'order' => 'DSC',
		'posts_per_page'=> '12',  // overrides posts per page in theme settings
	);
	
	$loop = new WP_Query( $args );
	
	if( $loop->have_posts() ):
		while( $loop->have_posts() ): $loop->the_post(); global $post;
		?>
			<div class="press-release">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<time><?php the_date(); ?></time>
				<p><?php the_excerpt(); ?></p>
				<a class="button alignright" href="<?php the_permalink(); ?>">Read More</a>
				<div class="clear"></div>	
			</div>
		<?php
		endwhile;
	endif;
}
	
/** Remove Post Info */
remove_action('genesis_before_post_content','genesis_post_info');
remove_action('genesis_after_post_content','genesis_post_meta');
 
genesis();