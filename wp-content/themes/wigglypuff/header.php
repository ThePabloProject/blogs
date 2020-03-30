<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
    <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory')?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory')?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory')?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory')?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory')?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory')?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_directory')?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory')?>/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/owl.carousel.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/style.css"/>
	<?php wp_head(); ?>
	<style>.single-post .left_aside h2{
		    margin-top: 45px;

	}</style>
</head>

<body <?php body_class(); ?>>
<div class="main_contaoner">
<header class="clearfix">
    <div class="branding">
      <figure><a href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="Logo"></a></figure>
    </div>
    <div class="navigation">
      <div class="btnmenu"><a href="javascript:;"><img src="<?php bloginfo('template_directory')?>/images/hamburger.svg" alt="mbtn"></a></div>
      <nav id="mobilemenu">
        <div class="mobilemenuclose"><a href="javascript:;"><img src="<?php bloginfo('template_directory')?>/images/close-icon.svg"></a></div>
        <?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'primary-menu',
										)
									);
								?>
      </nav>
    </div>
    <div class="enquirynow search_con">
      <button type="button" id="buttonsearch"><img src="<?php bloginfo('template_directory')?>/images/search.png" alt=""></button>
      <div class="searchbardiv" id="formsearch">
      
      <?php echo $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
     <div class="input-group">
    <input type="text" value="' . get_search_query() . '" name="s" id="searchbox" class="form-control" />
    
    </div>
    </form>';?>
      
      
       
      </div>
    </div>
    <div class="clear"></div>
  </header>