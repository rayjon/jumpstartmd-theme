<?php get_header(); ?>

<div id="content" >

<!-- This sets the $curauth variable -->

	<?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

    <h2><?php echo $curauth->display_name; ?></h2>
    
    <div class="author-description">
		<?php echo $curauth->description; ?>
	</div>
    
    <h2>Articles by <?php echo $curauth->display_name; ?>:</h2>

    <div class="author-articles">
    <ul>
<!-- The Loop -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
				<?php the_title(); ?></a>
        </li>

		<?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

		<?php endif; ?>
    
<!-- End Loop -->

    </ul>
    </div>
    <?php wp_pagenavi() ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>