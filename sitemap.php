<?php
/**
 * Template Name: Site Map
 *
 * @description Site Map Page Template
 * @author iSearchMedia
 * @package Child
 * @subpackage Customizations
 */
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'jumpstart_sitemap');

/*
 * This is the same output as teh Genisis 404 page
 */
function jumpstart_sitemap() { ?>

<div class="post hentry">

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-content">
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>

		<div class="archive-page">

			<h4><?php _e( 'Pages:', 'genesis' ); ?></h4>
			<ul>
				<?php wp_list_pages( 'title_li=' ); ?>
			</ul>

			<h4><?php _e( 'Categories:', 'genesis' ); ?></h4>
			<ul>
				<?php wp_list_categories( 'sort_column=name&title_li=' ); ?>
			</ul>

		</div><!-- end .archive-page-->

		<div class="archive-page">

			<h4><?php _e( 'Authors:', 'genesis' ); ?></h4>
			<ul>
				<?php wp_list_authors( 'exclude_admin=0&optioncount=1' ); ?>
			</ul>

			<h4><?php _e( 'Monthly:', 'genesis' ); ?></h4>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>

			<h4><?php _e( 'Recent Posts:', 'genesis' ); ?></h4>
			<ul>
				<?php wp_get_archives( 'type=postbypost&limit=100' ); ?>
			</ul>

		</div><!-- end .archive-page-->

	</div><!-- end .entry-content -->

</div><!-- end .postclass -->
 
<?php
}
genesis(); ?>