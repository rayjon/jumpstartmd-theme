<?php

genesis_structural_wrap( 'site-inner', 'close' );
echo '</div>'; //* end .site-inner or #inner
?>

<footer id="footer" class="site-footer">
    <div class="wrap">
        <div class="left-grid grid-33 mobile-grid-parent">
        	<h2>Where to Find Us</h2>
        	<a href="<?php echo site_url('/weight-loss-clinics-bay-area/'); ?>">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jumpstartmd-location-map.png">
            </a>
            <?php wp_nav_menu( array('menu' => 'Social Menu', 'container_class' => 'pad-ex-light' )); ?>
    	</div>
    	      	
        <div class="grid-33 right-grid mobile-grid-parent">
            <h2>Our Locations</h2>
            <?php wp_nav_menu( array ( 'menu' => 'locations', 'depth' => 1 ) ); ?>
            <div class="footer-phone">
                <span id="numberassigned_1">1-855-JUMPSTART</span>
            </div>
      	</div>
      	
      	<div class="grid-33 mobile-grid-parent">
            <h2>Blog Highlights</h2>
            <ul class="blog-posts">
                <?php 
                wp_get_archives( array(
                'type' => 'postbypost',   // or daily, weekly, monthly, yearly
                'limit' => 5,   // maximum number shown
                'format' => 'html',   // or select (dropdown), link, or custom (then need to also pass before and after params for custom tags
                'show_post_count' => false,    // show number of posts per link
                'echo' => 1     // display results or return array
                ) ); 
                ?>
          	</ul>
          	<h3>Sign Up For Our Blog</h3>
            <div>  
                <form method="post" action="#" target="_blank" pageId="6030947" siteId="201550" parentPageId="6030946">
                    <input type="hidden" name="formSourceName" value="StandardForm">
                    <input type="hidden" name="sp_exp" value="yes">
                    <input type="hidden" name="Opt_In Blog" id="control_COLUMN12" value="Yes">                
                    <label>Email
                        <input type="email" name="Email" id="control_EMAIL" label="Email:" required>
                    </label>
                            
                    <label>First Name
                        <input type="text" name="First Name" id="control_COLUMN1" label="First Name:" required>
                    </label>
                    
                    <label>Last Name
                        <input type="text" name="Last Name" id="control_COLUMN2" label="Last Name:" required>
                    </label>
                    
                    <fieldset>
                    <legend>Please also send me special offers and discounts</legend>
                        <label><input type="radio" name="Opt_In Promotional" id="control_COLUMN49_0" label="Please also send me special offers and discounts:" value="Yes" required="">Yes</label>
                        <label><input type="radio" name="Opt_In Promotional" id="control_COLUMN49_1" label="Please also send me special offers and discounts:" value="No" required="">No
                        </label>
                    </fieldset>                                        
                    <input type="submit" class="defaultText buttonStyle" value="Subscribe">
                </form> 
            </div>
    	</div>
    <div class="clear"></div>
    </div><!-- .wrap -->
</footer>
            	
<div class="colophon"> 
    <div class="wrap"> 
        <?php wp_nav_menu( array ( 'menu' => 'Footer Nav', 'depth' => 1 ) ); ?>
		<div class="clear"></div>
		&copy; <?php echo date("Y") ?> JumpstartMD, Inc. All Rights Reserved
    </div>
</div><!-- .colophon -->
	
<?php
echo '</div>'; //* end .site-container or #wrap

do_action( 'genesis_after' );
wp_footer(); //* we need this for plugins
?>
</body>
</html>