<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Styles -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/library/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/library/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/img/favicon.png" />

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type='text/javascript' src="<?php bloginfo( 'template_directory' ); ?>/library/css/bootstrap.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
    <div class="row">
        <header>
            <nav class="navbar" role="navigation">
                <?php
                wp_nav_menu(array(
                    'menu' => 'Menu Principal',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav navbar-nav',
                    'walker' => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>
        </header>

