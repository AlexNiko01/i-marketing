<div class="sidebar">
    <section class="payment_issue">
        <div class="head">
            <div class="fl-to-l">
            	<?php if(get_field('places') != '') { ?>
                  <span class="payment_descript">
            	    <?php $places = get_field('places'); ?>
                    <?php the_field('phrase-59'); ?>
                    <span style="display : inline; <?php if ($places<6) {echo "color:red; font-weight : bold;"; } ?>"> <?php echo $places;   echo " ";?></span>
                    <?php if((substr($places, -1) == 2 || substr($places, -1) == 3 || substr($places, -1) == 4)&&(substr($places, -2,1) != 1)) { the_field('phrase-61'); } else if((substr($places, -1) == 1)&&(substr($places, -2,1) != 1) || (substr($places, -1) == 1)&&(strlen($places)==1)) { the_field('phrase-62'); } else { the_field('phrase-63'); }?>
		  </span><?php } ?>
                <span class="payment_descript"><?php the_field('phrase-64') ?></span>
                <h2 class="pay-val"><?php the_field('price') ?> грн.</h2>
                <?php if(get_field('pay_to') != '') { ?><span class="payment_descript"><?php the_field('phrase-50') ?> <?php the_field('pay_to') ?></span><?php } ?>
            </div>
            <?php if(get_field('descoun_1') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> — <?php the_field('phrase-60'); ?> <?php the_field('descoun_1') ?></span><?php } ?>
            <?php if(get_field('descoun_2') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i> — <?php the_field('phrase-60') ?> <?php the_field('descoun_2') ?></span><?php } ?>
            <?php if(get_field('descoun_3') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i> — <?php the_field('phrase-60') ?> <?php the_field('descoun_3') ?></span><?php } ?>
        </div>
        <div class="foot">
            <a href='#reg-popup' class="btn orange-btn js-reg-form "><?php the_field('phrase-52'); ?></a>

            <?php if(get_field('pay_format') != '') { ?>
              <span><b><?php the_field('phrase-51') ?></b></span>
              <div class="payment_services">
                      <?php $pay_format = get_field('pay_format'); ?>
                      <?php if (in_array('Безналичный расчет', $pay_format)) { ?><span>Безналичный расчет, </span><?php } ?>
                      <?php if (in_array('Безготівковий розрахунок', $pay_format)) { ?><span>Безготівковий розрахунок, </span><?php } ?>					  
                       <div class="payment_logos"><!--
                        <?php if (in_array('liqpay', $pay_format)) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/liqpay.png" alt=""/></span><?php } ?> -->
                    	<?php if (in_array('visa', $pay_format)) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/visa.png" alt=""/></span><?php } ?>
                    	<?php if (in_array('mastercard', $pay_format)) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/mastercard.png" alt=""/></span><?php } ?>
                       </div>
              </div>
            <?php } ?>


            <?php if(get_field('in_pay') != '') { ?><span class="descript_payment"><b><?php the_field('phrase-53') ?></b><br /> <?php the_field('in_pay'); ?></span><?php } ?>
            <?php if(get_field('wifi')) { ?><span class="wifi"><b><?php the_field('phrase-54') ?></b> <img src="<?php bloginfo("template_url"); ?>/img/images/wifi.png" alt=""/></span><?php } ?>
            
            <?php if(get_field('seminat_rozklad') != '') { ?>
            <div class="js-accordion-item acc-i first_accordion">
                <div class="acc-i-title">
                    <a class="see_letter" href="#"><?php the_field('phrase-55') ?></a>
                </div>
                <div class="acc-i-content">
                    <p><?php the_field('seminat_rozklad') ?></p>
                </div>
            </div>
            <?php } ?>
            
            <?php if(get_field('location') != '') { ?>
            <div class="js-accordion-item acc-i">
                <div class="acc-i-title">
                    <a class="place" href="#"><?php the_field('phrase-56') ?></a>
                </div>
                <div class="acc-i-content">
                    <p><?php the_field('location') ?></p>
                    <?php if(get_field('maps') != '') { ?><a href="<?php the_field('maps') ?>" target="_blank" style="color: #000000"><?php the_field('phrase-57') ?></a><?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

<section class="payment_issue flyer">

     <div class="head">
        	<div class="fl-to-l">
            <h2><?php the_field('price') ?> грн.</h2>
            <span class="payment_descript"><?php the_field('phrase-50') ?> <?php the_field('pay_to') ?></span>
           </div>
            <?php if(get_field('descoun_1') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> — <?php the_field('phrase-60') ?> <?php the_field('descoun_1') ?></span><?php } ?>
            <?php if(get_field('descoun_2') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i> — <?php the_field('phrase-60') ?> <?php the_field('descoun_2') ?></span><?php } ?>
            <?php if(get_field('descoun_3') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i> — <?php the_field('phrase-60') ?> <?php the_field('descoun_3') ?></span><?php } ?>
        </div>
        <div class="foot">
            <a href='#reg-popup' class="btn orange-btn js-reg-form "><?php the_field('phrase-52') ?></a>

	  <?php if(get_field('pay_format') != '') { ?>
            <span><b><?php the_field('phrase-51') ?></b></span>
            <div class="payment_services">
                <?php if (in_array('Безналичный расчет', get_field('pay_format'))) { ?><span>Безналичный расчет, </span><?php } ?>
                <?php if (in_array('Безготівковий розрахунок', $pay_format)) { ?><span>Безготівковий розрахунок, </span><?php } ?>
                <div class="payment_logos">
                    <?php if (in_array('liqpay', get_field('pay_format'))) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/liqpay.png" alt=""/></span><?php } ?>
                    <?php if (in_array('visa', get_field('pay_format'))) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/visa.png" alt=""/></span><?php } ?>
                    <?php if (in_array('mastercard', get_field('pay_format'))) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/mastercard.png" alt=""/></span><?php } ?>
                </div>
            </div>
          <?php } ?> 


            <?php if(get_field('in_pay') != '') { ?><span class="descript_payment"><b><?php the_field('phrase-53') ?></b><br /> <?php the_field('in_pay'); ?></span><?php } ?>
            <?php if( get_field('wifi') ) { ?><span class="wifi"><b><?php the_field('phrase-54') ?></b> <img src="<?php bloginfo("template_url"); ?>/img/images/wifi.png" alt=""/></span><?php } ?>
            
            <?php if(get_field('seminat_rozklad') != '') { ?>
            <div class="js-accordion-item acc-i first_accordion">
                <div class="acc-i-title">
                    <a class="see_letter" href="#"><?php the_field('phrase-55') ?></a>
                </div>
                <div class="acc-i-content">
                    <p><?php the_field('seminat_rozklad') ?></p>
                </div>
            </div>
            <?php } ?>
            
            <?php if(get_field('location') != '') { ?>
            <div class="js-accordion-item acc-i">
                <div class="acc-i-title">
                    <a class="place" href="#"><?php the_field('phrase-56') ?></a>
                </div>
                <div class="acc-i-content">
                    <p><?php the_field('location') ?></p>
                    <?php if(get_field('maps') != '') { ?><a href="<?php the_field('maps') ?>" target="_blank" style="color: #000000"><?php the_field('phrase-57') ?></a><?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
       </section>
	
	
    <?php get_template_part('includes/subscribe'); ?>
	
</div>
