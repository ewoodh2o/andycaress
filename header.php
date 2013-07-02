<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->

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
<link href="/wp-content/themes/andycaress/stylesheets/screen2013.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="/wp-content/themes/andycaress/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="/wp-content/themes/andycaress/images/favicon.png" />

<?php if(is_page('5k')) { ?>
  <?php // 5k FB OG Meta Tags ?>
  <meta property="og:title" content="Andy Caress 2013 Block the Sun Run"/>
  <meta property="og:url" content="http://www.andycaress.org/5k/"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="Registration page for the Third Annual Block the Sun Run on May 11, 2013 to benefit the Andy Caress Melanoma Foundation."/>
  <meta property="og:image" content="http://www.andycaress.org/wp-content/themes/andycaress/images/logo_sidebar.png"/>
  <meta property="fb:app_id" content="568404459838216"/>
<?php } ?>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=568404459838216";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--
  <div id="notification">
    <div class="inner">
      <b>Third Annual Block the Sun Run</b> &nbsp;&bull;&nbsp;
      May 11, 2013 &nbsp;&bull;&nbsp;
      Details at <a href="http://andycaress.org/5k">andycaress.org/5k</a> or <a href="http://andycaress.org/register">Register Now!</a>
      &nbsp;&nbsp; <div class="fb-like" data-href="https://app.etapestry.com/onlineforms/AndyCaressMelanomaFoundation/5kregistration.html" data-send="true" data-layout="button_count" data-width="150" data-show-faces="true" data-font="tahoma"></div>
    </div>
  </div>
-->
	<div id="access" role="navigation">
	  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</div><!-- #access -->
	
	<div id="wrapper" class="<?php echo is_front_page() ? '' : 'constrained'; ?>">
		
		<div id="main">
