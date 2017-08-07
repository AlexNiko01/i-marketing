<?php $speakers = get_field('speaker_info');
if (!empty($speakers)) : ?>
    <section class="ss-speakers">
        <div class="ss-container ss-container--small">
            <h2 class="ss-title"><?php the_field('phrase-3') ?></h2>
            <h3 class="ss-subtitle"><?php the_field('about_speakers') ?></h3>
            <?php $class = 'ss-speakers__list';
            if (count($speakers) <= 3) {
                $class = 'ss-speakers__list-ns cf';
            } ?>
            <div class="<?php echo $class ?>">
                <?php foreach ($speakers as $speaker) : ?>
                <?php $speaker = $speaker['speaker']; ?>
                <?php if (!empty($speaker)) : ?>
                <?php $id = $speaker->ID; ?>
                <div class="ss-speakers__single">
                    <div class="ss-speakers__single__inner cf">
                        <?php if (count($speakers) <= 3) { ?>
                            <div class="ss-speakers__wrap">
                        <?php } ?>
                        <figure class="rounded-image">
                            <img src="<?php echo get_the_post_thumbnail_url($id) ?>"
                                 alt="<?php ?>">
                        </figure>
                        <h4><?php echo $speaker->post_title ?></h4>
                        <p><?php the_field('position', $id) ?></p>
                        <?php if (count($speakers) <= 3) { ?>
                    </div>
                    <?php } ?>
                    <div class="ss-speakers__single__description"><?php the_field('description', $id) ?></div>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
        </div>
        </div>
    </section>
<?php endif; ?>