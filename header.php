<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/favicons/favicon-16x16.png">
    <link rel="mask-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/favicons/safari-pinned-tab.png" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#f5f5f5">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/favicons/favicon.ico">
    <!-- End Favicons -->
	<?php wp_head(); ?>
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-16530955-1', 'auto');
      ga('send', 'pageview');
      ga('require', 'GTM-WCSVTGN');
      ga('set', 'anonymizeIp', true);
    </script>
    <!-- End Google Analytics -->
</head>

<body class="drawer-ease">

<div class="hfeed site" id="page">


<nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex">

        <div data-region="drawer-toggle" class="d-inline-block">
            <button id="budrawer"  type="button" class="btn nav-link float-sm-left mr-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"></i></button>
        </div>

        <ul class="navbar-nav d-none d-md-flex">
            <?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							); ?>
        </ul>

		

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="navbar-brand" class="navbar-brand has-logo mx-auto">
                <div class="logo d-inline-flex mx-auto">
                    <img class="icon " alt="Saylor" title="Saylor" src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/img/logos/logo_dark_large.svg">
                </div>
           </a>

        <ul class="nav navbar-nav flex-nowrap">
            <div class="d-none d-lg-block">
            
        </div>
            <!-- navbar_plugin_output -->
            
            <!-- user_menu -->
            <li class="nav-item d-flex align-items-center text-right usermenu">
                <div class="usermenu"><span class="login"> <a href="https://learn.saylor.org/login/index.php?utm_source=nb&utm_medium=p&utm_campaign=Log%in">Log in or Sign up</a></span></div>
            </li>
        </ul>
        <!-- search_box -->
</nav>
