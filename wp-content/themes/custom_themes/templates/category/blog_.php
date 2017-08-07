<?php while (have_posts()) : the_post(); ?>
    <div class="article article__short">
        <h6><?php $category = get_the_category( $custompost ); echo $category[1]->cat_name; ?></h6>
        <h2><a href='<?php the_permalink(); ?>'> <?php the_title(); ?>   </a></h2>
        <div class="article-short-info">
            <span class="article-date">
                <i class="fa fa-calendar"></i> <?php echo get_the_date( 'j F Y' ); ?>
            </span>
        </div>

        <?php the_content(); ?>

        <a href="<?php the_permalink(); ?>" class='btn btn__s'>Читать дальше</a>
    </div>
<?php endwhile; ?>