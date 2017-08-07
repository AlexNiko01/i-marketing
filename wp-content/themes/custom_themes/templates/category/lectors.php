<section class="im_lectors">
    <div class="lectors_row">
    <?php $l=0; while (have_posts()) : the_post(); $l++; ?>
      
            <div class="single_speaker">
                <?php the_post_thumbnail(); ?>
                <span class="single_speaker_header"><?php the_title(); ?></span>
                <!--<span class="single_speaker_post">Интернет-маркетолог.</span>-->
                <span class="single_speaker_description"><?php the_content(); ?></span>
            </div>
        
    <?php endwhile; ?>
    </div>
</section>
