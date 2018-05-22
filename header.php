<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yadab Nepal" />
    <title><?php echo get_option('groom_name'); ?> & <?php echo get_option('bride_name'); ?> - Wedding</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . 'favicon.ico' ?>">

    <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/animate.css' ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/icomoon.css' ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <!-- Superfish -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/superfish.css' ?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/magnific-popup.css' ?>">
    <style>
        :root {
            --weddingColor: <?php echo get_option('color'); ?>;
        }
    </style>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/style.css' ?>">


    <!-- Modernizr JS -->
    <script src="<?php echo get_template_directory_uri() . '/js/modernizr-2.6.2.min.js' ?>"></script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

        <div class="fh5co-hero" data-section="home">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo get_option('coverImage'); ?>);">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="animate-box">
                                    <h1>The Wedding</h1>
                                    <h2><?php echo get_option('groom_name'); ?> &amp; <?php echo get_option('bride_name'); ?></h2>
                                    <p><span><?php echo get_option('wedding_date'); ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Wedding</a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                       <?php
                            wp_nav_menu( array(
                            'theme_location' => 'top-menu',
                            'container' => "ul",
                            'menu_class' => 'sf-menu',
                            'menu_id' => 'fh5co-primary-menu'
                            ));
                     ?>
                    </nav>
                </div>
            </div>
        </header>