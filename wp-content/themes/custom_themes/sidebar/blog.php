<div class="sidebar">

    <aside class="side-bar-menu">
        <?php
        $args = [
            'child_of' => 3,
            'title_li' => ''

        ]; ?>
        <ul>
            <li class="cat-item "><a href="<?php echo site_url(); ?>/category/blog/">Все</a></li>
            <?php
            wp_list_categories($args);
            ?>
        </ul>
    </aside>
    <?php get_template_part('includes/upcoming_events'); ?>
    <?php get_template_part('includes/subscribe'); ?>

</div> 