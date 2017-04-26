<?php get_header(); ?>

<div id="content-sidebar-wrap">
    <div class="wrap">
    	<div id="content" class="hfeed content">
        	<main id="main" class="site-main" role="main">
        		<div class="flexslider flex-blog">
        			<?php
        			echo '<ul class="slides">';
        			$slider_cats = array(174, 175, 177, 372, 176);
        			$cat_border_colors = array( 'meals', 'medicine', 'mindset', 'misc', 'movement' );
        			foreach ($slider_cats as $key => $slider_cat) {
        				$slider_query_args = array(
        					'numberposts' => 1,
        					'category' => $slider_cats[$key]
        				);
        				$slide = get_posts($slider_query_args);
        				echo '<li><a href="' . get_permalink($slide[0]->ID) . '" title="Look '.esc_attr($slide[0]->post_title).'" >' . get_the_post_thumbnail( $slide[0]->ID, 'Slideshow' ) . '</a>';
        				echo '<p class="flex-caption ' . $cat_border_colors[$key] . '"><a href="' . get_permalink($slide[0]->ID) . '" title="Look '.esc_attr($slide[0]->post_title).'" >'.esc_attr($slide[0]->post_title).'</a></p></li>';
        			}
        			echo '</ul>';
        			?>
        		</div>
        		 
        		<!-- <div class="hide-on-mobile blog-topic-menu">
                    <?php 
                    //wp_nav_menu( array('menu' => 'Blog Topics' )); 
                    ?>
        		</div> -->
        
        		<?php 
                if ( have_posts() ) : 
        		while ( have_posts() ) : the_post();
        		?>
        			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    					<div class="hide-on-desktop mobile-grid-100 grid-parent">
    						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
    					</div>
        				
        				<div class="grid-60 left-grid mobile-grid-100">
        					<?php
        					if ( in_category( 'medicine' )) {
        					?>
        						<a class="button-medicine" href="<?php echo get_category_link(get_cat_id('medicine')); ?>">Medicine</a>
        					<?php
        					} elseif ( in_category( 'movement' )) {
        					?>
        						<a class="button-movement" href="<?php echo get_category_link(get_cat_id('movement')); ?>">Movement</a>	
        					<?php
        					} elseif ( in_category( 'meals' )) {
        					?>
        						<a class="button-meals" href="<?php echo get_category_link(get_cat_id('meals')); ?>">Meals</a>
        					<?php
        					} elseif ( in_category( 'mindset' )) {
        					?>
        						<a class="button-mindset" href="<?php echo get_category_link(get_cat_id('mindset')); ?>">Mindset</a>
        					<?php
        					} else {
        					?>
        						<a class="button-misc" href="<?php echo get_category_link(get_cat_id('Miscellaneous')); ?>">Miscellaneous</a>
        					<?php
        					}
        					?>
        					<div class="blog-comments alignright">
        						<?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
        						<i class="fa fa-comment light-gray"></i> <?php comments_number( '0', '1', '%' ); ?>
        					</div>
        					<div class="clear"></div>
                            <?php the_title( sprintf( '<h2 class="feed-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        					<p><?php the_date('m.d.y'); ?> by <?php the_author_posts_link(); ?></p>
        					<p>
            					<?php the_excerpt(); ?> 
        					    <a href="<?php the_permalink(); ?>">[Read More]</a>
        				    </p>
        					<?php edit_post_link(); ?>
        				</div>
        				<div class="grid-40 right-grid hide-on-mobile hide-on-tablet">
        					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large-thumb', array('class' => 'alignright') ); ?></a>
        				</div>
        			</article>
        		<?php
        		endwhile; 
        		endif; 
        		wp_pagenavi()
        		?>
        	</main>
    	</div><!-- #content -->
    	
    	<?php
    	$post_views_query = new WP_Query( array(
			'meta_key' => 'post_views_count',
			'orderby' => 'meta_value_num',
			'posts_per_page' => 3,
            'ignore_sticky_posts' => true
		));
    	?>
    	<div id="sidebar" class="sidebar">
    		<?php
    		if ( $post_views_query->have_posts() ) {
    		    echo '<div class="widget widget_text"><h4 class="widgettitle">Most Viewed Posts</h4>';
    			echo '<ul class="viewed-posts">';
    			while ( $post_views_query->have_posts() ) {
    				$post_views_query->the_post();
    				echo '<li>';
    				if ( has_post_thumbnail() ) {
    					the_post_thumbnail( array(64,64), array('class' => 'alignleft') );
    				} else {
    					echo '<img src="http://www.jumpstartmd.com/wp-content/themes/wallrich/images/jsmd-logo-bullet.png" width=64>';				
                    }
    				echo '<a href="' . get_the_permalink() . '">' . the_title('') . '</a></li>';
    			}
    			echo '</ul></div>';
    		} 
    		dynamic_sidebar('Blog Sidebar'); 
    		?>
    		<div class="widget widget_text">
    			<h4 class="widgettitle">Categories</h4>
    			<div class="category-browser">
    				<div class="grid-50 mobile-grid-100 grid-parent color-block-meals">
    					<a href="<?php echo get_category_link(get_cat_id('meals')); ?>">Meals</a>
    				</div>
    				<div class="grid-50 hide-on-tablet grid-parent image-block">
    					<a href="<?php echo get_category_link(get_cat_id('meals')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/turkey-meatballs-vegetables.png"></a>
    				</div>
    				
    				<div class="clear"></div>
    				
    				<div class="grid-50 hide-on-tablet grid-parent image-block">
    					<a href="<?php echo get_category_link(get_cat_id('movement')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/woman-running-on-trail-300x300.jpg"></a>
    				</div>	
    				<div class="grid-50 mobile-grid-100 grid-parent color-block-movement">
    					<a class="movement" href="<?php echo get_category_link(get_cat_id('movement')); ?>">Movement</a>
    				</div>
    				
    				<div class="clear"></div>
    				
    				<div class="grid-50 mobile-grid-100 grid-parent color-block-mindset">
    					<a class="mindset" href="<?php echo get_category_link(get_cat_id('mindset')); ?>">Mindset</a>
    				</div>
    				<div class="grid-50 hide-on-tablet grid-parent image-block">
    					<a href="<?php echo get_category_link(get_cat_id('mindset')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dance-movement.png"></a>
    				</div>
    				
    				<div class="clear"></div>
    				
    				<div class="grid-50 hide-on-tablet grid-parent image-block">
    					<a href="<?php echo get_category_link(get_cat_id('medicine')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lustig.png"></a>
    				</div>
    				<div class="grid-50 mobile-grid-100 grid-parent color-block-medicine">
    					<a class="medicine" href="<?php echo get_category_link(get_cat_id('medicine')); ?>">(Good) Medicine</a>
    				</div>
    				
    				<div class="clear"></div>
    				
    				<div class="grid-50 mobile-grid-100 grid-parent color-block-misc">
    					<a class="misc" href="<?php echo get_category_link(get_cat_id('miscellaneous')); ?>">Miscellaneous</a>
    				</div>
    				<div class="grid-50 hide-on-tablet grid-parent image-block">
    					<a href="<?php echo get_category_link(get_cat_id('miscellaneous')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market-veggies.png"></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div><!-- .wrap -->
</div><!-- #content-sidebar-wrap -->

<?php get_footer(); ?>