<section class="ss-price">
    <div class="ss-blue-grad-bc">
        <div class="ss-container ss-container--small">
            <div class="ss-flex ss-price__row">
                <div class="col-33 text-left ss-price__description">
                    <?php if (get_field('pay_to') != '') { ?>
                        <p class="payment_descript">
                                <?php the_field('phrase-64'); ?>
                                <?php the_field('phrase-50'); ?></p>
                        <p class="ss-pay-to"><?php the_field('pay_to'); ?></p>
                    <?php } ?>
                </div>
                <div class="col-33">
                    <h2 class="pay-val"><span class="ss-price__amount"><?php the_field('price') ?></span> <span class="ss-currency">грн</span></h2>
                </div>
                <div class="col-33">
                    <?php if (get_field('places') != '') { ?>
                        <a href='#reg-popup' class="btn orange-btn js-reg-form "><?php the_field('phrase-52'); ?></a>
                        <p class="ss-price__reg-description">
                            <?php $places = get_field('places'); ?>
                            <span> <?php echo __('Осталось','custom_themes') ?>
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
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>