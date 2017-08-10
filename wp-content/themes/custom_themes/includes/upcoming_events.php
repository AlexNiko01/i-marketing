<?php query_posts($query_string . 'cat=4&showposts=1'); ?>

<aside class="closest_event ss-blue-grad-bc">
    <h3 class="closest_event__title">Ближайшее событие</h3>
    <div class="events_shedule_wrap">

        <?php while (have_posts()) : the_post(); ?>
            <div class="closest_event__content">
                <div class="closest_event__date-city">
                    <i class="fa fa-calendar"></i>
                    <?php the_field('date_of_the_event') ?>, <?php the_field('city') ?>
                </div>
                <?php $terms = get_the_terms(get_the_ID(), 'category'); ?>
                <div class="closest_event__term">
                    <?php  echo $terms[0]->name; ?>
                </div>
                <h4 class="closest_event__sub-title"><?php the_title() ?></h4>
                <div class="ss-pay-val"><?php the_field('price') ?></div>
                <a href='#reg-popup' class="btn orange-btn js-reg-form "><?php the_field('phrase-52'); ?></a>
                <?php if (get_field('places') != '') { ?>

                    <?php $places = get_field('places'); ?>
                    <div class="closest_event__places"><span><?php echo __('Осталось', 'custom_themes') ?></span>
                        <span> <?php echo $places;
                            echo " "; ?></span>
                    <?php if ((substr($places, -1) == 2 || substr($places, -1) == 3 || substr($places, -1) == 4) && (substr($places, -2, 1) != 1)) {
                        the_field('phrase-61');
                    } else if ((substr($places, -1) == 1) && (substr($places, -2, 1) != 1) || (substr($places, -1) == 1) && (strlen($places) == 1)) {
                        the_field('phrase-62');
                    } else {
                        the_field('phrase-63');
                    }
                    echo __(' из ','custom_themes');
                    the_field('places_from');
                    ?></div>
                <?php } ?>
            </div>

        <?php endwhile; ?>
        <?php wp_reset_query() ?>
    </div>
</aside>
 