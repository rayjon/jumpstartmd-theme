(function($) {
    jQuery(document).ready(function() {
        jQuery('.flex-blog').flexslider({
	            animation: 'slide',
	            directionNav: false,
	            smoothHeight: true,
	            controlNav: true
	    });
    });
    
    jQuery(document).ready(function() {
        jQuery('.flex-home').flexslider({
            animation: 'fade',
            slideshow: false,
            prevText: "",
            nextText: "",
            directionNav: false
	    });
    });
    
    jQuery(document).ready(function() {
        jQuery('.flex-testimonials').flexslider({
            animation: 'slide',
            animationSpeed: 400,
            controlNav: true,
            directionNav: false,
            slideshow: false,
            smoothHeight: true, 
            prevText: "",
            nextText: ""
	    });
    });
    
    /* I got lazy and included the Facboxy Init script here as well. To do: move script or change files. */
    jQuery(document).ready(function() {
		jQuery('.fancybox').fancybox({
    		padding     : 25,
    		minWidth    : 400,
    		maxWidth	: 500,
    		minHeight   : 400,
            maxHeight	: 650,
            closeClick	: false,
            openEffect	: 'none',
            closeEffect	: 'none',
            scrolling   : 'no'
		});
	});
})(jQuery)