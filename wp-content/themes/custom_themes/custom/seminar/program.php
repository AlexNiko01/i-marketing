<?php $speakers = get_field('speakers_programs');
if (!empty($speakers)) : ?>

    <section class="ss-program">
        <div class="ss-program__title ss-blue-grad-bc">
            <div class="ss-container ss-container--small">
                <h2><?php the_field('phrase-2') ?></h2>
                <h3 class="ss-subtitle"><?php the_field('programm_subtitle') ?></h3>
            </div>
        </div>

        <div class="ss-container ss-container--small">
            <div class="ss-program__list">
                <?php foreach ($speakers as $i => $row) : ?>
                    <?php if (count($speakers) >= 2 && $i === 2) : ?>
                        <div class="ss-program__more" id="program_list">
                    <?php endif; ?>
                    <?php $speaker = $row['speaker_p']; ?>
                    <?php $id = $speaker->ID; ?>
                    <?php if (!empty($speaker) && $row['program']): ?>
                        <div class="ss-program__single">
                            <div class="ss-program__speaker">
                                <figure class="rounded-image ss-program__speaker__image">
                                    <img src="<?php echo get_the_post_thumbnail_url($id, 'medium') ?>"
                                         alt="<?php ?>">
                                </figure>
                                <h5><?php echo $speaker->post_title ?></h5>
                            </div>
                            <div class="ss-program__content">
                                <?php echo $row['program'] ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (count($speakers) > 2 && count($speakers) === $i + 1) : ?>
                        </div>
                        <a href="#" class="ss-program__more__link" id="show_more"
                           data-target="program_list">
                            <span class="show_more--show">
                                <?php echo __('Показать все доклады', 'custom_themes') ?>
                            </span>
                            <span class="show_more--hide" style="display: none;">
                                <?php echo __('Скрыть доклады', 'custom_themes') ?>
                            </span>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>