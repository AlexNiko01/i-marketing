<?php
//$seminarTerm = get_term_by('slug', 'seminaryi', 'category');
//$link = get_category_link($seminarTerm);
$upcoming = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'post',
        'meta_value' => 1,
        'post__not_in' => array(get_the_ID())
    )
);
?>
<section class="ss-single-others-posts">
    <div class="ss-bordered-info">
        <h4 class="ss-bordered-info__title"><?php echo __('Другие записи:', 'custom_themes') ?></h4>
        <div class="ss-bordered-info__list">
            <div class="ss-bordered-info__wrap">
                <?php while ($upcoming->have_posts()) : $upcoming->the_post(); ?>
                    <a href="<?php the_permalink() ?>" class="ss-bordered-info__item">
                        <h4 class="ss-bordered-info__sub-title"><?php the_title(); ?></h4>
                        <?php $category = get_the_category(get_the_ID()); ?>
                        <span class="ss-article__cats">
                                   <?php foreach ($category as $item) { ?>
                                       <span class="ss-article__cat">
                                        <?php echo ' #' . $item->name; ?>
                                        </span>
                                   <?php } ?>
                            </span>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php wp_reset_query(); ?>
</section>

