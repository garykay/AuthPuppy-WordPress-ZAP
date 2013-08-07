<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	// Add the blog name.
	bloginfo( 'name' );

	?></title>
	
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width">
  <!-- More ideas for your <head> here: h5bp.com/docs/#head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr and Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.0.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/libs/respond.min.js"></script>
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
	<div id="container">
    <header>
		<div id="signature">
			<a href="http://zapquebec.org" id="logo">Service offert par ZAP Québec</a>
			<div id="ms">
			<a href="http://www.facebook.com/pages/ZAP-Qu%C3%A9bec/114289998224" id="facebook" class="ms">Notre page Facebook</a>
			<a href="http://twitter.com/#!/zapquebec" id="twitter" class="ms">Suivez nous sur Twitter</a>
			</div>
		</div>
	
		<h1><span>ZAP</span> <?php bloginfo('name'); ?></h1>
	
		<div id="online_users"><span><?php zap_connected_users(); ?></span> usager(s) en ligne</div>
    </header>
    <div id="main" role="main">
