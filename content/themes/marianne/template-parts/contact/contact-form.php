 <!-- <form action="#" class="contact-form">
    <div class="field is-half">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="field is-half">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div class="field">
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
    </div>
    <div class="field">
        <input type="submit" class="button__form" value="envoyer">
    </div>
</form> -->

<!-- <div class="contact-form"> -->
<?php // echo do_shortcode('[contact-form-7 id="38" title="Contact"]'); ?>
<!-- </div> -->

<div class="contact-form">
    <?php

            $args = [
                'post_type' => 'page',
                'name' => 'contact'
            ];

            $wp_query = new WP_Query($args);

            if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

                the_content();

            endwhile; endif;

            wp_reset_postdata();

    ?>
</div>