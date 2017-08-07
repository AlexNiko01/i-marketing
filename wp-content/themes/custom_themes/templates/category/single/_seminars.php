<?php while (have_posts()) : the_post(); ?>

    <div id='reg-popup' class='reg-popup  mfp-hide'>
		<?php echo do_shortcode('[contact-form-7 id="516" title="Форма"]'); ?>
	</div>


    <div class="seminar-detail">
        <h4><?php the_field('type_of_event') ?> <?php the_field('date_of_the_event') ?></h4>
        <h2> <?php the_title(); ?> </h2>

        <?php if (get_field('what_are_you_get') != '') { ?>
            <div class="what-you-get">
                <h3>Что Вы получите от семинара</h3>
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


    <?php if($content = $post->post_content ) { ?>
        <div class="accordion-w">
            <div class="accordion-title">
                Программа семинара
            </div>

            <?php the_content(); ?>

        </div> 
    <?php } ?>

        <?php if (get_field('speaker') != '') { ?>

        <section class="speaker-w">
            <h4>Кто ведёт семинар?</h4>
            <div class="thumb">
                <?php the_post_thumbnail('full'); ?>
            </div>

            <?php the_field('speaker'); ?>

            <a id='show-ask-form' href="#ask-form" class='btn btn__m'>Задать вопрос лектору</a>
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

<?php endwhile; ?>
