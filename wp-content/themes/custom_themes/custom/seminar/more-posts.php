<section class="ss-more-posts">
    <div class="ss-container ss-container--small">
        <h2 class="ss-title"><?php echo __('Еще семинары и конференции', 'custom_themes') ?></h2>
        <div class="ss-row">
            <div class="col col-35">
                <h3>
                    <?php
                    $seminarTerm = get_term_by('slug', 'seminaryi', 'category');
                    $link = get_category_link($seminarTerm);
                    $upcoming = new WP_Query(array(
                            'posts_per_page' => 1,
                            'post_type' => 'post',
                            'meta_key' => 'upcoming_events',
                            'meta_value' => 1,
                            'post__not_in' => array(get_the_ID())
                        )
                    );
                    ?>
                    <?php echo __('Ближайший семинары', 'custom_themes') ?>
                    <a href="<?php echo $link ?>">(<?php echo __('Смотреть все', 'custom_themes') ?>)</a>

                </h3>

                <div class="ss-more-posts__closest">
                    <?php while ($upcoming->have_posts()) : $upcoming->the_post(); ?>
                        <article class="closest_single_event">
                            <a href="<?php the_permalink() ?>" class="ss-flex ss-post-item">
                                <span class="closest_date_event">
                                    <i class="fa fa-calendar"></i> <?php the_field('date_of_the_event') ?>
                                </span>
                                <h4><?php the_title(); ?></h4>
                                <h6><?php echo __('Смотреть программу', 'custom_themes'); ?></h6>
                            </a>
                        </article>
                    <?php endwhile; ?>

                    <?php wp_reset_query(); ?>
                </div>

            </div>
            <div class="col col-65 ss-conf">
                <h3><?php echo __('Конференции', 'custom_themes') ?></h3>
                <?php
                $conf = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'category_name' => 'projects'
                ));
                if ($conf->have_posts()) : ?>
                    <div class="ss-conf__list">
                        <?php while ($conf->have_posts()) : $conf->the_post(); ?>
                            <?php $logo = get_field('logo'); ?>
                            <article class="ss-conf__item">
                                <a href="<?php the_field('project-url'); ?>" target="_blank"
                                   class="ss-flex ss-post-item <?php echo $logo ? '' : 'no-logo' ?>">
                                    <?php if ($logo) : ?>
                                        <figure>
                                            <img src="<?php echo $logo['url'] ?>" alt="<?php the_title() ?>"
                                                 class="ss-conf__item__logo">
                                        </figure>
                                    <?php endif; ?>
                                    <h4><?php the_title() ?></h4>
                                    <span class="link">
                                        <?php echo __('на сайт конференции', 'custom_themes') ?>
                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_query() ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>