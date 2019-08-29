<?php

if (!function_exists('marianne_scripts')) :

    function marianne_scripts() {

        wp_enqueue_script(
            'marianne-app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '1.0.0',
            true
        );

        wp_enqueue_style(
            'marianne-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '1.0.4'
        );

    }

endif;

add_action('wp_enqueue_scripts', 'marianne_scripts');