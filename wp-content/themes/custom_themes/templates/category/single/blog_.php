<?php while (have_posts()) : the_post(); ?>
    <div class="article">
        <h2><?php the_title(); ?></h2>
        <span class="article-date"><i class="fa fa-calendar"></i> <?php the_time('d F Y'); ?></span>
        <span class='article-author'><a href="<?php the_field('author_url') ?>"><?php the_field('author_name') ?></a> </span>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
