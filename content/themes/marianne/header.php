
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
                <div class="navbar fixed">
                  <!-- Navbar content -->
                  <ul class="navbar__menu">
                    <li><a href="#about" class="navbar__links">A propos</a></li>
                    <li><a href="#exp" class="navbar__links">Expériences</a></li>
                    <li><a href="#training" class="navbar__links">Formation</a> </li>
                    <li><a href="#skills" class="navbar__links">Compétences</a></li>
                    <li><a href="project" class="navbar__links">Projets</a></li>
                    <li><a href="artbook.html" class="navbar__links">Artbook</a></li>
                    <li><a href="#contact" class="navbar__links">Contact</a></li>
                </ul>
            </div>
            <a href="" class="ui-button open-menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
        </header>