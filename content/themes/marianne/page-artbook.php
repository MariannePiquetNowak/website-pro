<?php get_header(); ?>

    <!-- SECTION BANNER -->


<section class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="banner__lead__content rellax" data-rellax-speed="3">
    <img src="<?= get_template_directory_uri() . "/public/images/logo-website-white.png"; ?>" alt="" class="logo-website">
        <h1 class="name"><?php the_title(); ?></h1>
        <p>Voici un aperçu des diverses réalisations graphiques réalisées avec Adobe Photoshop, Illustrator et InDesign</p>
        <p>Enjoy !</p>
</section>



    <!-- SECTION GALLERY IMAGE -->

    <section class="artbook">

        <?php if (have_posts()): while (have_posts()): the_post();

            the_content('page-artbook');

        endwhile; endif; ?>

    </section>

<?php get_footer(); ?>