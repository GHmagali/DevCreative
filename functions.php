<?php

///// Enregistre le menu /////
function register_menu()
{
    // Active le support des menus
    add_theme_support('menus');
    // Enregistre les emplacements des menus
    register_nav_menus(array(
        'main_menu' => 'Menu du Header',
        'footer_menu' => 'Menu du Footer',
    ));
}
add_action('after_setup_theme', 'register_menu');

///// Ajout du support pour le logo du site /////
function logo_setup()
{
    add_theme_support('custom-logo', array());
}
add_action('after_setup_theme', 'logo_setup');

///// Ajout du support pour la balise de titre /////
function theme_slug_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_slug_setup');

///// Déclare le CSS /////
function theme_enqueue_styles()
{
    wp_enqueue_style('Devcreative', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

///// Déclare le JS /////
function enqueue_custom_scripts()
{
    // Annule l'enregistrement du JQuery par défaut de Wordpress
    wp_deregister_script('jquery');

    //  Enregistre jQuery depuis le CDN
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', false);
    wp_enqueue_script('jquery');

    // Ajoute les scripts personnalisés JQuery
    wp_enqueue_script('modalescript', get_template_directory_uri() . '/js/modale.js', array('jquery'), '1.0', true);
    wp_enqueue_script('burgerscript', get_template_directory_uri() . '/js/burger-menu.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
