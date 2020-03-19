<!-- This file communicates with file(s) in the includes folder.
If you desire to style a new blog category differently, create a
new file like this one and name it category-namehere.php (e.g., 
category-blog, category-recipes, category-football). In short, this
is a category specific version of the archives file.
-->

<?php get_header();?>

<section class="page-wrap">
<div class="container">
    
<h1><?php echo single_cat_title();?></h1>

    <?php get_template_part('includes/section', 'archive');?>


    <!-- <?php previous_posts_link();?> -->
    <!-- <?php next_posts_link();?> -->

    <!-- The code below adds Pagination to the Blog Page (i.e., 
    Next Page, Previous Page) If you want to revert to something 
    more simple, uncomment the code above or see the theme 
    developer handbook for pagination.
     -->
    <?php
    global $wp_query;

    $big = 9999999999; // need an unlikely integer

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged-%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ));
    ?>

</div>
</section>

<?php get_footer();?>