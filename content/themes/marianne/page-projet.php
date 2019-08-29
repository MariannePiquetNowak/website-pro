<?php get_header(); ?>

<section class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="banner__lead__content rellax" data-rellax-speed="3">
    <img src="<?= get_template_directory_uri() . "/public/images/logo-website-white.png"; ?>" alt="" class="logo-website">
        <h1 class="name"><?php the_title(); ?></h1>
        <p>Voici les quelques projets qui m'a été permis de réaliser seule ou à plusieurs</p>
</section>

 <!-- SECTION PROJECTS -->

 <section class="project">
    <?php if (have_posts()): while (have_posts()): the_post();

        the_content('page-projet');

    endwhile; endif; ?>
 </section>


<?php get_footer(); ?>