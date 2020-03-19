<?php get_header();?>

<section class="page-wrap">
<div class="container">

    <!-- Display Featured Image if post has thumbnail -->
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large');?>" 
        alt="<?php the_title();?>" 
        class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>

    <h1><?php the_title();?></h1>

    <!-- This entire file utilizes the blogcontent template part which can
    be found in the includes folder named section-blogcontent.php -->
    <?php get_template_part('includes/section', 'blogcontent');?>

    <!-- Allows page breaks. This enables you to 
    create a blog post with multiple pages -->
    <?php wp_link_pages();?>

</div>
</section>

<?php get_footer();?>

