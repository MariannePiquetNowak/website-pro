<section class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="banner__lead__content rellax" data-rellax-speed="3">
    <img src="<?= get_template_directory_uri() . "/public/images/logo-website-white.png"; ?>" alt="" class="logo-website">
        <h1 class="name"><?php the_title(); ?></h1>
        <div class="work"><?php the_content(); ?></div>
        <p class="localisation"><i class="fa fa-globe" aria-hidden="true"></i>Brie-Comte-Robert, France (77)</p>
    </div>
    <div class="banner__lead__down rellax" data-rellax-speed="0">
        <a href="#about"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
    </div>
</section>