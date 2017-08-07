<?php
function custom_enqueue_styles()
{

    /** Styles */
    wp_enqueue_style('style-custom', get_template_directory_uri(). '/css/custom-2.min.css', null, null);
    wp_enqueue_style('style-extension', get_template_directory_uri(). '/css/extension-2.css', null, null);

    /** Scripts */
    wp_enqueue_script('slick', get_template_directory_uri() .'/js/lib/slick2.min.js', array(), true, true);
    wp_enqueue_script('custom', get_template_directory_uri() .'/js/custom2.js', array(), true, true);

//    wp_localize_script('all', 'global',
//        array(
//            'url' => admin_url('admin-ajax.php')
//        )
//    );
}

add_action('wp_enqueue_scripts', 'custom_enqueue_styles');