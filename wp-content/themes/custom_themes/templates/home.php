<section class="promo">
    <!-- <div class="promo_overlay"></div> -->
    <img class="promo_img" src="<?php bloginfo("template_url"); ?>/img/images/event_image.jpg" alt=""/>
    <div class="text_overlay">
        <div class="container">
            <h1 class="promo_header"><?php the_field('slogan'); ?></h1>
            <span class="promo_description"><?php the_field('slogan_desc'); ?></span>
            <a class="view_all_promo promo orange-btn btn" href="<?php echo get_category_link(4); ?>"><i class="fa fa-eye">  </i> Смотреть семинары</a>
        </div>
    </div>
</section>

<section class="icons_row">
    <div class="container">
        <div class="first_icon icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/case001.png" alt="" />
            <span>Лучшие
                <br>
                спикеры</span>
        </div>
        <div class="second_icon icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/case002.png" alt="" />
            <span>Только
                <br>
                реальные кейсы</span>
        </div>
        <div class="third_icon icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/case003.png" alt="" />
            <span>Комфортные
                <br>
                залы</span>
        </div>
        <div class="fourth_icon icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/case004.png" alt="" />
            <span>Удобное время
                <br>
                проведения</span>
        </div>
    </div>
</section>


<section class="events">
    <div class="container">
        <h2 class="events_header"><span>Ближайшие события</span></h2> 
        
        <?php query_posts($query_string . 'cat=array(4,13)&showposts=5');?>
        
        <?php while (have_posts()) : the_post(); ?>
        <?php if(get_field('upcoming_events') == 1): ?>
            <div class="single_event">
                <div class="single_event_content">
                    <span class="event_over_header"><?php the_field('type_of_event'); ?></span>
                    <span class="single_event_header"><?php the_title(); ?></span>
                    <span class="event_description"><?php the_field('short_desc') ?></span>
                </div>
                <div class="single_event_footer">
                    <span class="date"><i class="fa fa-calendar"></i> <?php the_field('date_of_the_event') ?></span>                    <span class="schedule"><i class="fa fa-clock-o"></i> <?php the_field('the_workshop') ?></span>					<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('location'); ?></span>
                    <span class="place"><?php if(get_field('places') != '') { ?>                  <span class="payment_descript">            	    <?php $places = get_field('places'); ?>                    <?php the_field('phrase-59'); ?>                    <span style="display : inline; <?php if ($places<6) {echo "font-weight : bold;"; } ?>"> <?php echo $places;   echo " ";?></span>                    <?php if((substr($places, -1) == 2 || substr($places, -1) == 3 || substr($places, -1) == 4)&&(substr($places, -2,1) != 1)) { the_field('phrase-61'); } else if((substr($places, -1) == 1)&&(substr($places, -2,1) != 1) || (substr($places, -1) == 1)&&(strlen($places)==1)) { the_field('phrase-62'); } else { the_field('phrase-63'); }?>		  </span><?php } ?></span>
                    <a class="view_seminar_program" href="<?php echo get_permalink(); ?>">Смотреть программу</a>
                </div>
        </div>
        <?php endif; ?>
        <?php endwhile; ?>
        
        <a href="<?php echo get_category_link(4); ?>" class='btn btn__m'>Все семинары</a>
        
        <?php wp_reset_query(); ?>


    </div>
</section>
<section class="doubl_icons_row">
    <div class="container">
        <div class="icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/promo.png" alt="" />
            <span>4 года 
                эффективного обучения 
                интернет-маркетингу</span>
        </div>
        <div class="icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/promo.png" alt="" />
            <span>5 конференций - 
                EmailConference, 
                SMM Rocks, 
                I-Marketing BBQ, 
День контент-маркетинга, 
Pharma Digital Marketing
</span>
        </div>
        <div class="icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/promo.png" alt="" />
            <span>Более 60 семинаров, 
                более 2300 довольных 
                слушателей</span>
        </div>
        <div class="icon">
            <img src="<?php bloginfo("template_url"); ?>/img/images/promo.png" alt="" />
            <span>Множество опытных спикеров - 
                практикующих специалисты, 
                лучших в своих отраслях</span>
        </div>
    </div>
</section>
<section class="our_speakers">
    <div class="container" style="text-align: center;">
        <h2 class="speakers_header"><span>Наши спикеры</span></h2>
        
        <div class="row">
        <?php query_posts($query_string . 'cat=6&showposts=4');  ?>
        
        <?php while (have_posts()) : the_post(); ?>
            <div class="single_speaker">
                <?php the_post_thumbnail('full'); ?>
                <span class="single_speaker_header"><?php the_title(); ?></span>
                <span class="single_speaker_description"><?php the_content(); ?></span>
            </div>
        <?php endwhile; ?>
        </div>
        <a href="<?php echo get_category_link(6); ?>" class="btn" >Все спикеры</a>
        
        <?php wp_reset_query(); ?>
        
    </div>

</section>
<section class="learn-w">
    <div class="container">
        <h2>У нас учатся</h2>
        <?php query_posts($query_string . 'cat=5');  ?>
        <ul class="learn-w-list">
            <?php $l=0; while (have_posts()) : the_post(); $l++; ?>
                <?php if(get_field('we-learn') == 1): ?>
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <li>
                            <a href="#popup<?php echo $l; ?>">
                            <div class="img" style="background-image: url(<?php echo $url; ?>)"></div>
                            </a>
                    </li>
                    <div id="popup<?php echo $l; ?>" class="white-popup mfp-hide">
                        <span class="popup_header"><?php the_title(); ?></span>
                        <span class="popup_feedback"><?php the_field('review_desc') ?></span>
                        <span class="popup_description"><?php the_content(); ?></span>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </ul>
        <a href="<?php echo get_category_link(5); ?>" class="btn">Все клиенты</a>
        <?php wp_reset_query(); ?>
    </div>
</section>
<style>
#subscribe-form .btn.disabled {
    color: #ccc;
    cursor: progress;
    }
</style>
<script>
function subscribeToSpam() {
$('#subscribe-form .btn').addClass('disabled');
$.post('/subscribe.php',{
	name: $('#subscribe-form .icon-user').val(),
	email: $('#subscribe-form .icon-mail').val()
	}, function (resp) {
	$('#subscribe-form .btn').removeClass('disabled');
    }, 'json');
return false;
}
</script>

<?php echo do_shortcode("[php snippet=2]"); ?>
