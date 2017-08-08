<?php query_posts($query_string . 'cat=4&showposts=4'); ?>

<aside class="ss-event-side ss-blue-grad-bc">
    <div class="ss-event-side__shedule_wrap">
        <h3>Ближайшие события</h3>

        <?php while (have_posts()) : the_post(); ?>
            <?php if(get_field('upcoming_events') == 1): ?>
            <div class="closest_single_event">
                <h4><?php the_title(); ?></h4>
                <span class="closest_date_event"><i class="fa fa-calendar"></i> <?php the_field('date_of_the_event') ?></span>
                <a href="<?php the_permalink(); ?>">Посмотреть программу <i class="fa fa-angle-right"></i></a>
            </div>
            <?php endif; ?>
        <?php endwhile; ?>

    </div>
</aside>
 