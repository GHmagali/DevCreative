<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DevCreative</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="header">
        <nav id="header-menu">
            <!-- Menu principal -->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container'      => 'ul',
                'menu_class'     => 'menu-header',
            ));
            ?>
        </nav>
        <!-- Menu Hamburger -->
        <div id="icon" class="burger__btn">
            <span class="line1"></span>
            <span class="line2"></span>
            <span class="line3"></span>
        </div>
    </div>
</body>