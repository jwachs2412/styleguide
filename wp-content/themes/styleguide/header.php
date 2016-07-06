<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
		
	<!--font awesome-->
		<script src="https://use.fontawesome.com/0f42b260b7.js"></script>
	
	<?php wp_head(); ?>
	

	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	
	
	
	
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#myScrollspy">
	
<header class="header-main">
	<div class="site-main">
		<div class="logo"></div>
		
		<?php wp_nav_menu( array('theme_location' => 'Primary') );?>
	</div>
</header>


	
<div id="page" class="site">
	<div class="site-inner">
		

		
		<div id="content" class="site-content">
			
			
			

