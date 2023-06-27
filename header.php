<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="site-header">
        <div class="container">
            <a id="home-link" class="site-logo" href="<?php echo site_url(); ?>">
                <img src="<?= get_stylesheet_directory_uri(); ?>/img/logoFBlanc.png" alt="Logo">
            </a>
            <nav class="site-navigation" role="navigation">
                <?php wp_nav_menu( array(
                    'theme_location'    => 'menu-principal',
                    'menu_class'        => 'nav-menu',
                ) ); ?>
            </nav>
        </div>
    </div>
</header>
