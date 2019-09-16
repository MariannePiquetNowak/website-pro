<?php

if (!function_exists('marianne_setup')) :

    function marianne_setup() {

        // Ajout de la balise title
        add_theme_support('title-tag');

        // Ajout du support des posts thumbnails
        add_theme_support('post-thumbnails');

        // Format des posts
        add_theme_support('post-formats', [
            'gallery',
            'quote'
        ]);

        // Je déclare à WP que mon thème supporte les menus
        add_theme_support('menu');

        // Comme je fait un register_nav_menus, le add_theme_support est automatiquement exe
        register_nav_menus([
            'social' => 'Menu des réseau sociaux',
            'burger' => 'Menu responsive'
        ]);



    }

endif;

add_action('after_setup_theme', 'marianne_setup');