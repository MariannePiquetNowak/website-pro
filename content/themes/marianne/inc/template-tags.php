<?php

//=========== POST_META ICON FONT AWESOME V4 ============= \\

function get_fa_icon() {

    $icon = '<i class="fa ';

    // SI il y a un post met "fa" et qu'il n'est pas vide
    if(!empty(get_post_meta(get_the_ID(), 'fa', true))) {

        // Alors je l'utilise
        $icon .= get_post_meta(get_the_ID(), 'fa', true);
    } else {
        $icon .= 'fa-plus';
    }


    $icon .= '" aria-hidden="true"></i>';

    return $icon;

}

function fa_icon() {
    echo get_fa_icon();
}



//=========== POST_META DATE ============= \\

function get_date_xp() {

    $date = '<h2 class="experience__date">';

    // Je récupère la meta_date
    $date .= get_post_meta(get_the_ID(), 'date', true);

    $date .= '</h2>';

    return $date;

}

function date_xp() {
    echo get_date_xp();
}

