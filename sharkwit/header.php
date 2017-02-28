<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sharkwit
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">    
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-navigation">
<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
</div>
<div id="page" class="site">
    <a name="top" id="top"></a>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sharkwit' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="container">
        <div class="row">
            <div class="columns four">
                <nav id="site-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><a href="#" class="nav__toggle"><img src="<?php echo get_template_directory_uri(); ?>/images/hamburger.png" width="50" alt="Main Menu" title="Main Menu" /></a></button>
                </nav><!-- #site-navigation -->
            </div>
            <div class="columns eight">
                <div class="site-branding">
                    <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="380" alt="sharkwit Design - the works of Matt Merino" title="sharkwit Design" class="alignright" /></a></div>
                </div><!-- .site-branding -->
            </div>
            <div class="clearfix"></div>
        </div>  
        </div>    
	</header><!-- #masthead -->

	<div id="content" class="site-content">
