<?php

do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); //* we need this for plugins
?>
</head>
<?php
genesis_markup( array(
	'html5'   => '<body %s>',
	'xhtml'   => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
	'context' => 'body',
) );
do_action( 'genesis_before' );

genesis_markup( array(
	'html5'   => '<div %s>',
	'xhtml'   => '<div id="wrap">',
	'context' => 'site-container',
) );

do_action( 'genesis_before_header' );
do_action( 'genesis_header' );
do_action( 'genesis_after_header' );
?>

<header id="header" class="site-header">
    <div class="wrap">
        <a href="<?php echo site_url(); ?>" class="logo site-logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jumpstartMD_logo.svg">
        </a>
        <nav class="site-nav"> 
            <?php wp_nav_menu( array('menu' => 'Main Menu', 'container' => 'nav', 'container_class' => 'main-nav' )); ?>
        </nav>
        <div class="number-portal">
            <span id="numberassigned" class="contact-phone">1-855-JUMPSTART</span>
            <a href="https://my.jumpstartmd.com/portal_user/sign_in" class="button-patient-portal">Patient Portal</a>
            <a href="<?php echo get_home_url() . '/contact-us/'?>" class="button-get-info">Contact Us</a>
        </div>
    </div><!-- .wrap -->
</header><!-- .site-header -->

<?php
genesis_markup( array(
	'html5'   => '<div %s>',
	'xhtml'   => '<div id="inner">',
	'context' => 'site-inner',
) );
genesis_structural_wrap( 'site-inner' );

