<?php get_header('custom'); ?>

<!-- content -->
<div class="content">
    <section class="ss-page-heading">
        <div class="ss-container ss-container--small">
            <?php if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div class="breadcrumbs"><ul>', '</ul></div>');
            } ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    </section>
    <section class="ss-blog">
        <div class="ss-container ss-container--small">


            <div class="main-content">
                <?php
                if (in_category(4) || in_category(44)) {
                    get_template_part('templates/category/single/seminars');
                } else if (in_category(6)) {
                    get_template_part('templates/category/single/lectors');
                } else if (in_category(3)) {
                    get_template_part('templates/category/single/blog');
                    get_template_part('custom/single/other-posts');
                } else if (in_category(5)) {
                    get_template_part('templates/category/single/review');
                };
                ?>
            </div>

            <?php
            if (in_category(4) || in_category(44)) {
                get_template_part('sidebar/single/seminars');
            } else if (in_category(3)) {
                get_template_part('sidebar/blog');
            }
            ?>


            <?php wp_reset_query(); ?>
            <?php
            if (in_category(4) || in_category(44)) {
                get_template_part('templates/category/single/footer');
            }
            ?>

        </div>
    </section>


    <?php get_template_part('custom/blog/upcoming-events') ?>

    <?php get_template_part('custom/seminar/organizators') ?>
</div>
<!-- content end -->


<?php get_footer(); ?>
