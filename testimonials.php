<?php
/**
 * Template Name: Testimonials
 *
 * @description Testimonials Page Template replacing Testimonials Category
 * @author iSearchMedia
 * @package Child
 * @subpackage Customizations
 */
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'custom_loop');

function custom_loop() {

	global $post;
	$pagename = $post->post_name;

    // Build the Page
	$args = array ( 'pagename' => $post->post_name );
	query_posts ($args);
?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<hr style="border:1px solid #EEE;">
		<div class="entry-content" style="margin-bottom:35px">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	<?php endwhile; ?>
<?php endif; ?>
<?php
    // Build the Post List
	global $paged;
    $args = (array(
        'cat' => 11,
        'order' => 'desc',
        'orderby' => 'date',
        'paged' => $paged,
        'posts_per_page' => 10
    ));
	query_posts ($args);
?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="post type-post status-publish format-standard hentry category-testimonials">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<hr style="border:1px solid #EEE;">
		<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail( array(85,85), array('class' => 'alignleft post-image') ); ?></a>
		<?php endif; ?>
		<?php the_excerpt(); ?>
		<a class="morelink" href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" rel="nofollow">[Read More]</a>
		</div><!-- .entry-content -->
	</div>
	<?php endwhile; ?>
<?php endif; ?>
 
<?php
}
genesis();
?>