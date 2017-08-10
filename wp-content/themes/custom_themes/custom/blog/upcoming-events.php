<section class="ss-up-com">
    <div class="ss-container ss-container--small">
        <?php
        $upcoming = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'meta_key' => 'upcoming_events',
                'meta_value' => 1,
                'post__not_in' => array(get_the_ID())
            )
        );
        ?>
        <div class="clearfix">
            <?php if (wp_is_mobile()) {
                $string = 'все';
            } else {
                $string = 'посмотреть все ближайшие события';
            } ?>
            <h2 class="ss-up-com__title"><?php echo __('Ближайшие события', 'custom_themes') ?></h2>
            <a class="ss-up-com__see"
               href="<?php echo $link ?>"><?php echo __($string, 'custom_themes') ?>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="ss-row ss-up-com-seminar">
            <div class="col col-no-pad-right col-75">

                <?php while ($upcoming->have_posts()) : $upcoming->the_post(); ?>
                    <article>
                        <a class="ss-up-com-seminar__content" href="<?php the_permalink() ?>">
                            <?php $terms = get_the_terms(get_the_ID(), 'category'); ?>

                            <span>
                                <span class="ss-up-com-seminar__term">
                                    <?php echo $terms[0]->name; ?>
                                </span>
                                <span class="ss-up-com-seminar__date">
                                    <i class="fa fa-calendar"></i> <?php the_field('date_of_the_event') ?>,
                                    <?php the_field('city') ?>
                                </span>
                                </span>
                            <h3 class="ss-up-com-seminar__title"><?php the_title(); ?></h3>
                            <div class="ss-uc-speakers">
                                <h5 class="ss-uc-speakers__title"><?php echo __('Лекторы', 'custom_themes'); ?></h5>
                                <?php $speakers = get_field('speaker_info'); ?>
                                <div class="ss-uc-speakers__wrap">
                                    <?php foreach ($speakers as $speaker) { ?>
                                        <div class="ss-uc-speakers__item">
                                            <h6 class="ss-uc-speakers__name"><?php echo $speaker['speaker']->post_title; ?></h6>
                                            <div class="ss-uc-speakers__descr"><?php the_field('description', $speaker['speaker']->ID); ?></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </a>
                    </article>
                <?php endwhile; ?>

            </div>
            <div class="col col-25 col-no-pad-left">
                <div class="ss-blue-grad-bc ss-up-com-seminar__item">

                    <?php if (get_field('pay_to') != '') { ?>
                        <span class="ss-payment_descript">
                                <?php the_field('phrase-64'); ?>
                                <?php the_field('phrase-50'); ?></span>
                        <p class="ss-pay-to"><?php the_field('pay_to'); ?></p>
                    <?php } ?>
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
                            echo __(' из ', 'custom_themes');
                            the_field('places_from');
                            ?></div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
