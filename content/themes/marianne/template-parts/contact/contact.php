 <!-- SECTION CONTACT -->

 <div id="contact"></div>

    <section class="container container__contact contact" id="contact">

    <?php

    if (!is_page('contact')): ?>

        <?php get_template_part('template-parts/contact/contact', 'form'); ?>

    <?php endif; ?>


    <?php get_template_part('template-parts/contact/contact', 'info'); ?>

    </section>