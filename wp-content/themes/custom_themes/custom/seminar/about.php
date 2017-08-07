<section class="ss-about">
    <div class="ss-container">
        <div class="ss-about__wrap ss-flex">
            <div class="col col-50 ss-about__item ss-about__item--large">
                <h3><?php echo __('Для кого подойдет этот семинар?', 'custom_themes') ?></h3>
                <?php the_field('suit') ?>
            </div>
            <div class="col col-50 ss-about__item ss-about__item--large">
                <h3><?php the_field('phrase-1') ?></h3>
                <?php the_field('what_are_you_get') ?>
            </div>
            <div class="col col-25 ss-blue-grad-bc  ss-about__item ss-about__item--last">
                <div class="fl-to-l">
                    <div class="fl-to-l">
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
                            <?php the_field('phrase-59'); ?>
                            <span> <?php echo $places;
                                echo " "; ?></span>
                            <?php if ((substr($places, -1) == 2 || substr($places, -1) == 3 || substr($places, -1) == 4) && (substr($places, -2, 1) != 1)) {
                                the_field('phrase-61');
                            } else if ((substr($places, -1) == 1) && (substr($places, -2, 1) != 1) || (substr($places, -1) == 1) && (strlen($places) == 1)) {
                                the_field('phrase-62');
                            } else {
                                the_field('phrase-63');
                            }
                            echo ' ';
                            the_field('places_from');
                            ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col col-25 ss-about__item">
                <h4 class="ss-about__title ss-about__title--payment"><?php the_field('phrase-51') ?></h4>
                <?php $pay_format = get_field('pay_format'); ?>
                <ul class="payment_services">
                    <?php if (in_array('Безналичный расчет', $pay_format)) { ?>
                        <?php echo '<li>' . __('Безналичный расчет') . '</li>' ?>
                    <?php } ?>
                    <?php if (in_array('Безготівковий розрахунок', $pay_format)) { ?>
                        <?php echo '<li>' . __('Безготівковий розрахунок') . '</li>' ?>
                    <?php } ?>
                    <?php if (in_array('liqpay', $pay_format) || in_array('visa', $pay_format) || in_array('mastercard', $pay_format)) {
                        echo '<li><span>' . __('Оплата картой', 'custom_themes'). '</span>'; ?>
                        <span class="payment_logos">

                            <?php if (in_array('liqpay', $pay_format)) { ?>
                                <img
                                        src="<?php bloginfo("template_url"); ?>/img/images/liqpay_M.png" alt=""/>
                                <?php } ?>
                            <?php if (in_array('visa', $pay_format)) { ?>
                                <img
                                        src="<?php bloginfo("template_url"); ?>/img/images/visa_M.png" alt="" style="height:14px" />
                                <?php } ?>
                            <?php if (in_array('mastercard', $pay_format)) { ?>
                                <img src="<?php bloginfo("template_url"); ?>/img/mastercard2.png" alt=""/>
                                <?php } ?>
                        </span>
                        <?php echo '</li>' ?>
                    <?php } ?>
                    <?php if (in_array('part_payment', $pay_format)) {
                        echo '<li><span>' . __('Оплата частями', 'custom_themes') .'</span>';?>
                        <img src="<?php bloginfo("template_url"); ?>/img/images/part_payment.png" alt=""/>
                       <?php echo '</li>';
                    } ?>
                    <?php if (in_array('part_payment', $pay_format)) {
                        echo '<li><span>' . __('Оплата в рассрочку', 'custom_themes') .'</span>';?>
                       <?php echo '</li>';
                    } ?>


                </ul>
            </div>

            <div class="col col-25 ss-about__item">
                <div class="descript_payment">
                    <?php if (get_field('in_pay') != '') { ?>
                        <h4 class="ss-about__title ss-about__title--in_pay"><?php the_field('phrase-53') ?></h4>
                        <?php the_field('in_pay'); ?>
                    <?php } ?>
                    <?php if(get_field('wifi') == true){
                        echo __('бесплатный wi-fi', 'custom_thrmes');?>
                        <img class="ss-wifi" src="<?php bloginfo("template_url"); ?>/img/images/wifi.png" alt=""/>
                    <?php  } ?>
                </div>
            </div>
            <div class="col col-25 ss-about__item">
                <h4 class="ss-about__title ss-about__title--location"><?php the_field('phrase-56') ?></h4>
                <p>
                    <small><strong><?php the_field('location') ?></strong></small>
                </p>
                <?php the_field('seminat_rozklad') ?>
            </div>
        </div>

    </div>
</section>