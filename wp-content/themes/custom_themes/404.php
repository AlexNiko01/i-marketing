<?php get_header(); ?>

<div class="content">
    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div class="breadcrumbs"><ul>', '</ul></div>');
        }
        ?>
        <div class="main-content">
            <h2><?php _e('Not Found', 'twentyfourteen'); ?></h2>
            <section class="contact-w"></section>
        </div>
    </div>
</div>

<?php get_footer(); ?>
