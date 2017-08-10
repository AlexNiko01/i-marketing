<?php
$who_organize = get_field('who_organizators');
$sub_title = get_field('about_organizators');?>
<div style="display: none">organizators</div>
<?php if (!empty($who_organize)) : ?>

    <section class="ss-organizators">
        <div class="ss-container ss-container--small">
            <h2 class="ss-title"><?php echo __('Кто организовывает семинар', 'custom_theme') ?></h2>
            <h3 class="ss-subtitle"><?php echo $sub_title ?></h3>

            <div class="ss-organizators__list">
                <?php foreach ($who_organize as $item) : ?>
                    <div class="ss-organizators__item">
                        <div class="ss-organizators__check"><i class="fa fa-check"></i></div>
                        <p><?php echo $item['tag'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>
