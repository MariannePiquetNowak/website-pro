<?php

if (!function_exists('marianne_setup')) :

    function marianne_setup() {

        // Ajout de la balise title
        add_theme_support('title-tag');

        // Ajout du support des posts thumbnails
        add_theme_support('post-thumbnails');

    }

endif;

add_action('after_setup_theme', 'marianne_setup');