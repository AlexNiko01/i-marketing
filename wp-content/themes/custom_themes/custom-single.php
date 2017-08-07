<?php
/*
 * Template Name: Seminar
 * Template Post Type: post
 */


get_header('custom'); ?>

    <input id="post-name" value="<?php the_title(); ?>" type="hidden"/>

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

                function onAjaxSuccess(data) {
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
    <section class="ss-intro" style="background-image: url('<?php the_post_thumbnail_url('full') ?>')">
        <div class="ss-intro__content">
            <h2 class="ss-intro__cat-name">
                <?php the_field('type_of_event') ?>
            </h2>
            <span class="ss-intro__text">
                <?php
                setlocale(LC_ALL, array('ru_RU.utf-8', 'rus_RUS.utf-8'));
                $date = get_field('event_data', false, false);
                $date = new DateTime($date);
                ?>
                <?php $formatted_time = strftime(" %e %B", $date->getTimestamp());
                echo $formatted_time;
                echo ', ' ?>
                <?php the_field('city') ?>
            </span>
            <h1 class="ss-intro__title"><?php the_title(); ?></h1>


        </div>
    </section>

<?php get_template_part('custom/seminar/about') ?>

<?php get_template_part('custom/seminar/speakers') ?>

<?php get_template_part('custom/seminar/program') ?>

<?php get_template_part('custom/seminar/price') ?>

<?php get_template_part('custom/seminar/organizators') ?>

<?php get_template_part('custom/seminar/more-posts') ?>

    <div id='ask-form' class="ask-form mfp-hide">
        <form action="">
            <input type="text" placeholder='Имя' class='icon-mail'>
            <input type="text" placeholder='Емайл' class='icon-user'>
            <textarea type="text" placeholder='Сообщение' class='icon-message'></textarea>
            <input type="submit" value="Отправить" class='btn orange-btn'>
        </form>
    </div>

    <div class="avv"
         style="display: none;"><?php echo do_shortcode('[amocrm id="62685" hash="f1e5538ea7b64eb6d6fb7ced8fec2f86" locale="ru"]'); ?></div>

<?php get_footer('custom') ?>