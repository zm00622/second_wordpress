<!-- This code communicates with the code in
 the front-page, single and page php files.

 (i.e., get_template_part('includes/section', 'content'); 

In short, this code is displaying the content entered
into the body on the dashboard-->
<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <?php the_content();?>

<?php endwhile; else: endif;?>