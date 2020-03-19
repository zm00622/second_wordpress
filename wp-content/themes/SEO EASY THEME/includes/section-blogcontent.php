<!-- This code communicates with the code in
 the front-page, single and page php files.

 (i.e., get_template_part('includes/section', 'content'); 

In short, this code is displaying the content entered
into the body on the dashboard-->
<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <?php echo get_the_date();?>

    <?php the_content();?>

    <!-- For the code below to work, the user must
    have their name mentioned in the wordpress user settings. -->
    <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>

    <p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>
    <!-- In the sake of page speed and simplicity
    the above could be removed. Authors can add their
    info to each page pretty easily. -->

    <?php
    $tags = get_the_tags();
    foreach($tags as $tag):?>

        <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
            <?php echo $tag->name;?>
        </a>

    <?php endforeach;?>

    <?php
    $categories = get_the_category();
    foreach($categories as $cat):?>

        <a href="<?php echo get_category_link($cat->term_id);?>">
        <p><?php echo $cat->name;?> </p>
        </a>
    <?php endforeach;?>

    <!-- To add comments to the blog, remove code comment below -->
    <?php // comments_template();?>

<?php endwhile; else: endif;?>