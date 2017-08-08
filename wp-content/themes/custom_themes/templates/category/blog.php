
<?php while (have_posts()) : the_post(); ?>
    <div class="ss-article article article__short clearfix">

        <h2><a href='<?php the_permalink(); ?>'> <?php the_title(); ?>   </a></h2>
        <span class="ss-article__cats">
            <?php $category = get_the_category( $custompost );

            ?>
            <?php foreach ($category as $item){?>
                <span class="ss-article__cat"><?php echo ' #'.$item->name; ?></span>
            <?php } ?>

        </span>


        <?php the_content(); ?>
        <div class="ss-article__info">
            <span class="article-date">
                <i class="fa fa-calendar"></i> <?php echo get_the_date( 'j F Y' ); ?>
            </span>
        </div>
        <a href="<?php the_permalink(); ?>" class="ss-button ss-article__btn">Читать статью </a>
    </div>
<?php endwhile; ?>
