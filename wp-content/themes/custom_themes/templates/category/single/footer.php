<div class="footer_issue">
  <div class="seminar_footer_bg">
      <!-- Column 1 -->
   	  <div class="seminar_footer_column ">
             <?php if(get_field('pay_format') != '') { ?>
              <span><b><?php the_field('phrase-51') ?></b></span>
              <div class="payment_services">
                      <?php $pay_format = get_field('pay_format'); ?>
                      <?php if (in_array('Безналичный расчет', $pay_format)) { ?><span>Безналичный расчет, </span><?php } ?>
                      <?php if (in_array('Безготівковий розрахунок', $pay_format)) { ?><span>Безготівковий розрахунок, </span><?php } ?>
                       <div class="payment_logos">
                        <?php if (in_array('liqpay', $pay_format)) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/liqpay.png" alt=""/></span><?php } ?>
                    	<?php if (in_array('visa', $pay_format)) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/visa.png" alt=""/></span><?php } ?>
                    	<?php if (in_array('mastercard', $pay_format)) { ?><span><img src="<?php bloginfo("template_url"); ?>/img/images/mastercard.png" alt=""/></span><?php } ?>
                       </div>
              </div>
            <?php } ?>

            <div class="descript_payment">
            <?php if(get_field('in_pay') != '') { ?><span><strong><?php the_field('phrase-53') ?></strong> <?php the_field('in_pay'); ?></span><?php } ?>
            </div>

            <?php if(get_field('wifi')) { ?><span class="wifi"><strong><?php the_field('phrase-54') ?></strong> <img src="<?php bloginfo("template_url"); ?>/img/images/wifi.png" alt=""/></span><?php } ?>
          </div>
      <!-- Column 2 -->
          <div class="seminar_footer_column">
             <?php if(get_field('seminat_rozklad') != '') { ?>
                <strong><?php the_field('phrase-55') ?></strong>
		<p><?php the_field('seminat_rozklad') ?></p>
             <?php } ?>

             <?php if(get_field('location') != '') { ?>
                <strong><?php the_field('phrase-56') ?></strong>
                <p><?php the_field('location') ?></p>
                <?php if(get_field('maps') != '') { ?><a href="<?php the_field('maps') ?>" target="_blank" style="color: #000000"><?php the_field('phrase-57') ?></a><?php } ?>
            <?php } ?>
  	  </div>
  </div>
      <!-- Column 3 -->
          <div class="seminar_footer_column_last">
             <div class="head">
            	<div class="fl-to-l">
                     <h2><?php the_field('price') ?> грн.</h2>
                     <?php if(get_field('pay_to') != '') { ?><span class="payment_descript"><?php the_field('phrase-50') ?> <?php the_field('pay_to') ?></span><?php } ?>
             	</div>
            	<?php if(get_field('descoun_1') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i>— <?php the_field('phrase-60'); ?> <?php the_field('descoun_1') ?></span><?php } ?>
            	<?php if(get_field('descoun_2') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i>— <?php the_field('phrase-60'); ?> <?php the_field('descoun_2') ?></span><?php } ?>
            	<?php if(get_field('descoun_3') != '') { ?><span class="discount"><i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i> <i class="fa fa-user"></i>— <?php the_field('phrase-60'); ?> <?php the_field('descoun_3') ?></span><?php } ?>
             </div>
             <div class="foot">
                 <a href='#reg-popup' class="btn_seminar btn orange-btn js-reg-form "><?php the_field('phrase-58') ?></a>
             </div>
  	  </div>

      <!-- Column 3 -->

</div>

<div class="footer_issue2">
     <h2><?php the_field('price') ?> грн.</h2>
     <?php if(get_field('pay_to') != '') { ?><span class="payment_descript"><?php the_field('phrase-50') ?> <?php the_field('pay_to') ?></span><?php } ?>
     <?php if(get_field('seminat_rozklad') != '') { ?>
                <strong><?php the_field('phrase-55') ?></strong>
		<p><?php the_field('seminat_rozklad') ?></p>
             <?php } ?>
     <?php if(get_field('location') != '') { ?>
           <strong><?php the_field('phrase-56') ?></strong>
           <p><?php the_field('location') ?></p>
           <?php if(get_field('maps') != '') { ?><a href="<?php the_field('maps') ?>" target="_blank" style="color: #000000"><?php the_field('phrase-57') ?></a><?php } ?>
     <?php } ?>
     <div class="foot">
                 <a href='#reg-popup' class="btn_seminar btn orange-btn js-reg-form "><?php the_field('phrase-52') ?></a>
             </div>
</div>

