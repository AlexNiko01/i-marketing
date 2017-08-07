<?php get_header(); ?>
<?php
if (is_page(13)) {
    get_template_part('templates/home');
} else if (is_page(489)) {
    ?>
    <div class="container">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="breadcrumbs"><ul>','</ul></div>');} ?>
        <div class="main-content">
            <section class="contact-w">
                <?php the_content(); ?>
            </section>
        </div>
    </div>
<?php } else { ?>
    <div class="content">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="breadcrumbs"><ul>','</ul></div>');} ?>
            <div class="main-content">
                <h2><?php the_title(); ?></h2>
                <section class="contact-w">
                    <?php the_content(); ?>
                </section>
            </div>
            <?php get_template_part('sidebar/standart-page'); ?>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>