<?php get_header(); ?>

<!-- content -->
<div class="content">
    <div class="container">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="breadcrumbs"><ul>','</ul></div>');} ?>
        
        <div class="main-content">
            <?php
            if(in_category(4) || in_category(44)) { get_template_part('templates/category/single/seminars'); }
            else if(in_category(6)) { get_template_part('templates/category/single/lectors'); }
            else if(in_category(3)) { get_template_part('templates/category/single/blog'); }
            else if(in_category(5)) { get_template_part('templates/category/single/review'); };
            ?>
        </div>
        
        <?php
        if(in_category(4) || in_category(44)) { get_template_part('sidebar/single/seminars'); }
        else if(in_category(3)) { get_template_part('sidebar/blog'); }
        ?>

	
	<?php wp_reset_query(); ?>
        <?php
        if(in_category(4) || in_category(44)) { get_template_part('templates/category/single/footer'); }
        ?>

    </div>
</div>
<!-- content end -->


<?php get_footer(); ?>
