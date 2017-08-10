<?php while (have_posts()) : the_post(); ?>
    <div class="ss-article article">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
