<?php while (have_posts()) : the_post(); ?>
     <div class="single_event">
                <div class="single_event_content">
                    <span class="event_over_header"><?php the_field('type_of_event'); ?></span>
                    <span class="single_event_header"><?php the_title(); ?></span>
                    <span class="event_description"><?php the_field('short_desc') ?></span>
                </div>
                <div class="single_event_footer">
                    <span class="date"><i class="fa fa-calendar"></i> <?php the_field('date_of_the_event') ?></span>                    
					<span class="schedule"><i class="fa fa-clock-o"></i> <?php the_field('the_workshop') ?></span>					
					<span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('location'); ?></span>
                    <span class="place"><?php if(get_field('places') != '') { ?>                  
						<span class="payment_descript">            	    
							<?php $places = get_field('places'); ?>                    
							<?php the_field('phrase-59'); ?>                    
							<span style="display : inline; <?php if ($places<6) {echo "font-weight : bold;"; } ?>"> <?php echo $places;   echo " ";?></span>          <?php if((substr($places, -1) == 2 || substr($places, -1) == 3 || substr($places, -1) == 4)&&(substr($places, -2,1) != 1)) { the_field('phrase-61'); } else if((substr($places, -1) == 1)&&(substr($places, -2,1) != 1) || (substr($places, -1) == 1)&&(strlen($places)==1)) { the_field('phrase-62'); } else { the_field('phrase-63'); }?>		  </span><?php } ?></span>
                    <a class="view_seminar_program" href="<?php echo get_permalink(); ?>">Смотреть программу</a>
                </div>
            </div>
<?php endwhile; ?>

