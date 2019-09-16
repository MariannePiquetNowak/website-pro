
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> <?php bloginfo('name'); ?> </title>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

        <div class="wrapper">
            <!-- HEADER -->
            <header class="header fixed">
                <!-- <div class="logo"> -->
                    <a class="logo" href="<?= home_url();?>">Accueil</a>
                <!-- </div> -->
                    <?php get_template_part('template-parts/menu/nav-main'); ?>

            <a href="" class="ui-button open-menu" title="Autres pages">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </header>