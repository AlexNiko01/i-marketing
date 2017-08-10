<?php get_header('custom'); ?>


<!-- content -->
<div class="content">
    <section class="ss-page-heading">
        <div class="ss-container ss-container--small">
            <?php if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div class="breadcrumbs"><ul>', '</ul></div>');
            } ?>
            <h1 class="page-title"><?php single_cat_title(); ?></h1>
        </div>
    </section>
    <section class="ss-blog">
        <div class="ss-container ss-container--small">
            <?php if (is_category(4) || is_category(44)) { ?>

                <?php get_template_part('templates/category/seminars');
            } else { ?>
                <div class="main-content">
                    <?php
                    if (is_category(6)) {
                        get_template_part('templates/category/lectors');
                    } else if (is_category(3) || cat_is_ancestor_of(3, $cat)) {
                        get_template_part('templates/category/blog');
                        myPagination();
                    } else if (is_category(5) || is_category(18)) {
                        get_template_part('templates/category/review');
                    };
                    ?>
                </div>
                <?php if (is_category(6)) {
                    get_template_part('sidebar/lectors');
                } else if (is_category(3) || cat_is_ancestor_of(3, $cat)) {
                    get_template_part('sidebar/blog');
                } else if (is_category(5) || is_category(18)) {
                    get_template_part('sidebar/review');
                };
            }; ?>
        </div>
    </section>
    <?php if (is_category(3) || cat_is_ancestor_of(3, $cat) || is_category(6) || is_category(5) || is_category(48)): ?>
        <?php get_template_part('custom/blog/upcoming-events') ?>
    <?php endif; ?>

    <?php if (is_category(3) || cat_is_ancestor_of(3, $cat) || is_category(6) || is_category(5) || is_category(4) || is_category(48)): ?>
        <?php get_template_part('custom/seminar/organizators') ?>
    <?php endif; ?>
</div>
<!-- content end -->

<?php get_footer(); ?>
