<?php
// Start the engine
require_once(TEMPLATEPATH.'/lib/init.php');

add_filter('widget_text','do_shortcode');

add_action('template_redirect', 'child_conditional_actions');

/** Loads Conditional Actions after the Query is formed before the template is loaded **/
function child_conditional_actions() {
	if( is_category('Staff') ) {
	    remove_action('genesis_loop', 'genesis_do_loop');
	    add_action('genesis_loop', 'child_do_abc_loop');
	}
}

/* Remove filter from user bios. */
remove_filter('pre_user_description', 'wp_filter_kses');

/** Loads Custom Loop to make query sort Alphabetically**/
function child_do_abc_loop() {
    genesis_custom_loop( array( 'category_name' => 'staff', 'orderby' => 'title', 'order' => 'ASC' ) );
}

// Excerpts
remove_filter('the_excerpt', 'wpautop');

add_filter('excerpt_more', 'jmd_plain_ellipsis');
function jmd_plain_ellipsis($more) {
    return '…';
}

add_filter( 'excerpt_length', 'jmd_excerpt_length' );
function jmd_excerpt_length( $length ) {
	return 30; // pull first 30 words
}

add_action('genesis_after_post_content', 'manual_excerpt_more_link', 1);
function manual_excerpt_more_link() {
    if(!is_singular() && is_category( array( 'Staff', 'Blog', 'Testimonials' )) ){
     echo '<a href="'.get_permalink().'" rel="nofollow" class="morelink">[Read More]</a>';
    }
}

// * Images
add_image_size('Slideshow', 610, 300, TRUE);
add_image_size('Homepage', 280, 125, TRUE);
add_image_size('Sidebar', 85, 85, TRUE);
add_image_size('large-thumb', 225, 225, TRUE);

// Customizes go to top text
add_filter('genesis_footer_backtotop_text', 'footer_backtotop_filter');
function footer_backtotop_filter($backtotop) {
    $backtotop = '[footer_backtotop text="Top of Page"]';
    return $backtotop;
}

add_filter( 'genesis_search_text', 'sp_search_text' );
function sp_search_text( $text ) {
	return esc_attr( '' );
}

// * Comments
/**
 * Modify speak your mind text in comments
 *
 * @author Brian Gardner
 * @link http://dev.studiopress.com/modify-speak-your-mind.htm
 */
 add_filter('genesis_comment_form_args', 'custom_comment_form_args');
 function custom_comment_form_args($args) {
    $args['title_reply'] = 'Share a Public Comment';
    return $args;
}

/**
 * Amend breadcrumb arguments.
 *
 * @author Gary Jones
 * @link http://dev.studiopress.com/modify-breadcrumb-display.htm
 *
 * @param array $args Default breadcrumb arguments
 * @return array Amended breadcrumb arguments
 */
 add_filter( 'genesis_breadcrumb_args', 'child_breadcrumb_args' );
function child_breadcrumb_args( $args ) {
    $args['home']                    = 'Home';
    $args['labels']['prefix']        = '';
    return $args;
}

/**
 * Add print stylesheet
 *
 * @author Jason Weaver
 * @link http://dev.studiopress.com/add-print-stylesheet.htm
 */
add_action('wp_head','print_styles');
function print_styles() { ?>
    <link href="<?php bloginfo('stylesheet_directory');?>/css/print.css" media="print" rel="stylesheet" type="text/css"/>
<?php }

/** Force full width layout on all archive pages*/
//add_filter( 'genesis_pre_get_option_site_layout', 'full_width_layout_archives' );

/* Load Main Stylesheet for Child Theme */
add_filter( 'stylesheet_uri', 'custom_replace_default_style_sheet', 10, 2 );
function custom_replace_default_style_sheet() {
	return get_stylesheet_directory_uri() . '/style.css';
}

/* Enqueue Custom Javascript and CSS Files */
add_action('wp_enqueue_scripts', 'my_add_scripts');
function my_add_scripts() {
    /* Landing Page Styles */
	if ( is_page( 8620 ) ) {
		wp_enqueue_style( 'mountain-view-landing', get_bloginfo('stylesheet_directory').'/css/mountain-view-landing.css' );
	}
	if ( is_page( 8800 ) ) {
		wp_enqueue_style( 'enter-to-win-landing', get_bloginfo('stylesheet_directory').'/css/enter-to-win-landing.css' );
	}
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
?>