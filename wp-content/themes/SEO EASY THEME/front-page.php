<?php get_header();?>

<section class="page-wrap">   
<div class="container">
    <h1><?php the_title();?></h1>

    <!-- Follows the path "includes/section to get body content
    of the page/post -->
    <?php get_template_part('includes/section', 'content');?>
</div>
</section>

<?php get_footer();?>

