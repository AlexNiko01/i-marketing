<?php while (have_posts()) : the_post(); ?>
    <article class="ss-article article article__short clearfix">
        <h2><a href='<?php the_permalink(); ?>'> <?php the_title(); ?>   </a></h2>
        <span class="ss-article__cats">
            <?php $category = get_the_category(get_the_ID()); ?>

            <?php foreach ($category as $item) { ?>
                <?php if ($item->category_parent != 0): ?>
                    <span class="ss-article__cat">
                        <?php echo ' #' . $item->name; ?>
                    </span>
                <?php endif; ?>
            <?php } ?>
        </span>

        <?php the_content(); ?>
        <div class="ss-article__info clearfix">
            <span class="article-date">
                <i class="fa fa-calendar"></i> <?php echo get_the_date('j F Y'); ?>
            </span>
            <a href="<?php the_permalink(); ?>" class="ss-button ss-article__btn">Читать статью
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
        </div>

    </article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
