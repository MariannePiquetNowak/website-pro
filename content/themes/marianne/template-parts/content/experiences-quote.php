<div class="experience">
    <div class="experience__icon">
        <i class="fa fa-code" aria-hidden="true"></i>
    </div>
    <div class="experience__content">
        <h2 class="experience__date"><?php the_time('F jS, Y'); ?></h2>
        <div class="experience__text">
            <h2 class="experience__entreprise"><?php the_title(); ?></h2>
            <h3 class="experience__poste">Git Master & partner lead dev-front</h3>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>

// modèle à afficher dans le front-page
<?php

$args = [
    'category_name' => 'experiences',
    // 'posts_per_page' => -1
];

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

        get_template_part('template-parts/content/experiences', get_post_format());

    endwhile; endif;

wp_reset_postdata();

?>