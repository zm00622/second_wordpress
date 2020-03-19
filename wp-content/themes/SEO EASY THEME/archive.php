<?php get_header();?>

<section class="page-wrap">
<div class="container">
    
    

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