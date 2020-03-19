<!-- This code communicates with the code in
 the front-page, single and page php files.

 (i.e., get_template_part('includes/section', 'content'); 

In short, this code is displaying the content entered
into the body on the dashboard-->
<?php if( have_posts() ): while( have_posts() ): the_post();?>
    
    <div class="card mb-3"> <!-- mb-3 is a bootstrap margin bottom class -->

        <div class="card-body">


            <!-- Display Featured Image if post has thumbnail -->
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('blog-large');?>" 
                alt="<?php the_title();?>" 
                class="img-fluid mb-3 img-thumbnail">
            <?php endif;?>


            <h3><?php the_title();?></h3>

            <?php the_excerpt();?> <!-- Or the_content if you want the page
            to display the whole blog post -->
            <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
        </div>

    </div>

<?php endwhile; else: endif;?>

<!-- Removing Div Card and Div Card Body would 
remove styiling but marginally increase page load speed.
-->