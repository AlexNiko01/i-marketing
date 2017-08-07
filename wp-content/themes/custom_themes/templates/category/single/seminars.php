<?php while (have_posts()) : the_post(); ?>
    <input id="post-name" value="<?php the_title(); ?>" style="display: none;" />
    <div id='reg-popup' class='reg-popup  mfp-hide'>
        <?php if (get_field('liqpay')) { ?>
            <?php echo do_shortcode('[contact-form-7 id="1000" title="Liqpay_Form"]'); ?>
        <?php } else { ?>
            <?php echo do_shortcode('[contact-form-7 id="516" title="Форма"]'); ?>
        <?php } ?>      
    </div>

    <span id='form_responce' style='display:none;'></span> <!-- Это виртуальное поле в которое вернется форма -->
    <script>
        function platon_pay() {
            if ($('.wpcf7-validates-as-required').val().length != 0) {
                $.get("http://i-marketing.ua/platon/platon.php",
                        {
                            price: parseInt($('.price-pay').html()),
                            seminar: $('#event_label').val(),
                            name: $('#cname').val(),
                            surname: $('#surname').val(),
                            femail: $('#femail').val(),
                            ftel: $('#fphone').val()
                        },
                onAjaxSuccess
                        );

                function onAjaxSuccess(data)
                {
                    $('#form_responce').html(data);
                    $('#form_responce form').submit();
                }
            }
        }
    </script> 

    <?php
    $date = get_field('event_data', false, false);
    $date = new DateTime($date);
    ?>
    <span class="event-data-load" style="display: none;"><?php echo $date->format('dmY'); ?></span>
    <span class="event-load" style="display: none;"><?php the_field('events'); ?></span>
    <div class="discount-list" style="display: none;">
        <?php if (have_rows('discount')): ?>
            <?php while (have_rows('discount')) : the_row(); ?>
                <div id="<?php the_sub_field('promocod'); ?>"><?php the_sub_field('persent_discont'); ?></div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="seminar-detail">
        <h4><?php the_field('type_of_event') ?> <?php the_field('date_of_the_event') ?></h4>
        <h2> <?php the_title(); ?> </h2>
        <input id="post-name" value="<?php the_title(); ?>" style="display: none;" />

        <?php if (get_field('what_are_you_get') != '') { ?>
            <div class="what-you-get">
                <h3><?php the_field('phrase-1') ?></h3>
                <?php the_field('what_are_you_get') ?>
            </div>

        <?php } ?>

        <?php
        $poster = get_field('poster');
        if (!empty($poster)):
            ?>
            <img src="<?php echo $poster; ?>" />
        <?php endif; ?>

        <div class="seminar-desc">
            <?php the_field('main_data') ?>
        </div>

    </div>


    <?php if ($content = $post->post_content) { ?>
        <div class="accordion-w">
            <div class="accordion-title">
                <?php the_field('phrase-2') ?>
            </div>

            <?php the_content(); ?>

        </div>
    <?php } ?>

    <?php if (get_field('speaker') != '') { ?>
        <section class="speaker-w">
            <div class="txt">
                <h4><?php the_field('phrase-3') ?></h4>
                <div class="thumb">
                    <?php the_post_thumbnail('full'); ?>
                </div>

                <?php the_field('speaker'); ?>

                <a id='show-ask-form' href="#ask-form" class='btn btn__m'><?php the_field('phrase-4') ?></a>
            </div>
        </section>
    <?php } ?>

    <div id='ask-form' class="ask-form mfp-hide" >
        <form action="">
            <input type="text" placeholder='Имя' class='icon-mail'>
            <input type="text" placeholder='Емайл' class='icon-user'>
            <textarea type="text" placeholder='Сообщение' class='icon-message'></textarea>
            <input type="submit" value="Отправить" class='btn orange-btn'>
        </form>
    </div>

    <div class="avv" style="display: none;"><?php echo do_shortcode('[amocrm id="62685" hash="f1e5538ea7b64eb6d6fb7ced8fec2f86" locale="ru"]'); ?></div>

<?php endwhile; ?>
