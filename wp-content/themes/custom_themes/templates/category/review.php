<section class="im_review">
    <div class="review_row">
        <?php $l=0; while (have_posts()) : the_post(); $l++; ?>
            <a href="#popup<?php echo $l; ?>">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="img" style="background-image: url(<?php echo $url; ?>)"></div>
            </a>
            <div id="popup<?php echo $l; ?>" class="white-popup mfp-hide">
                <span class="popup_header"><?php the_title(); ?></span>
                <span class="popup_feedback"><?php the_field('review_desc') ?></span>
                <span class="popup_description"><?php the_content(); ?></span>
            </div>
        <?php endwhile; ?>
    </div>
</section>
