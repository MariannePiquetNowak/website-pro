<?php get_header(); ?>


<section class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="banner__lead__content rellax" data-rellax-speed="3">
    <img src="<?= get_template_directory_uri() . "/public/images/logo-website-white.png"; ?>" alt="" class="logo-website">
        <h1 class="name"><?php the_title(); ?></h1>
        <p>Pour me contacter, rien de plus simple, </br>

        il suffit de remplir le formulaire ci-dessous </p>
</section>

 <section id="contact-form">
    <?php if (have_posts()): while (have_posts()): the_post();

        the_content('page-contact');

    endwhile; endif; ?>


 </section>



<?php get_footer(); ?>