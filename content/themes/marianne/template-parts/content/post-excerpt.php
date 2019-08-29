<h2 class="heading"><?php the_title(); ?></h2>
    <div class="description">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="profile-pic" class="description__pic">
        <div class="description__content">
            <p><?php the_content(); ?>
        </div>
    </div>

