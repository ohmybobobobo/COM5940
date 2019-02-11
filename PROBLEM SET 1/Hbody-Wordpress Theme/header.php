<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hbody - Build a health life for Young Agent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/aos.css">

    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="http://dev-ohmybobo.pantheonsite.io/">HBody</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="navbar-collapse collapse navbar-right">
			  <?php
					wp_nav_menu( array(
						'menu'              => 'primary',
 					   'theme_location'	    => 'primary',
 					   'depth'				=> 3, 
						'container'			=> 'div',
						'container_class'	=> 'collapse navbar-collapse',
						'container_id'		=> 'bs-example-navbar-collapse-1',
						'menu_class'		=> 'navbar-nav ml-auto',
 					   'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
 					   'walker'			=> new WP_Bootstrap_Navwalker()
					) );
					?>
			  </div>
				
		  </div>
	  </nav>
    <!-- END nav -->