<?php
function custom_enqueue_styles()
{

    /** Styles */
    wp_enqueue_style('style-custom', get_template_directory_uri() . '/css/custom-2.min.css', null, null);
    wp_enqueue_style('style-extension', get_template_directory_uri() . '/css/extension-2.css', null, null);

    /** Scripts */
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/lib/slick2.min.js', array(), true, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom2.js', array(), true, true);

//    wp_localize_script('all', 'global',
//        array(
//            'url' => admin_url('admin-ajax.php')
//        )
//    );
}

add_action('wp_enqueue_scripts', 'custom_enqueue_styles');
function myPagination()
{
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $the_query = new WP_Query(array(
        'posts_per_page' => 3,
        'category_name' => 'blog',
        'paged' => $paged,
    ));

    $max = $the_query->max_num_pages;
    while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
        <?php
    }
    wp_reset_postdata();

    $big = 999999999;
    echo '<div class="ss-pagination-wrap"><a href="' . get_pagenum_link(1) . '">' . __('первая...','custom_themes') . '</a>';

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $the_query->max_num_pages,
        'prev_text' => __('<i class="fa fa-long-arrow-left" aria-hidden="true"></i> предидущая'),
        'next_text' => __('следующая <i class="fa fa-long-arrow-right" aria-hidden="true"></i>'),
        'type' => 'list'
    ));
    echo '<a href="' . get_pagenum_link($max) . '">' . __('...последняя','custom_themes') . '</a></div>';
}


