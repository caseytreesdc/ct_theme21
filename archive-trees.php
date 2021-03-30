<?php get_header(); ?> 
<?php the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => __('NEWER POSTS', 'textdomain') ,
    'next_text' => __('OLDER POSTS', 'textdomain') ,
)); ?>
<?php 
    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            ?><h2>
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h2>
            <?php the_excerpt(); ?>
            <?php the_content();?>
            <?php 

            $fields = get_fields();
            
            if( $fields ): 
                // var_dump($fields)
                // get_attachment_image($fields['related_image'])
                ?>
            <?php endif; ?>
            <?php
        }
    }
?>
<?php the_posts_pagination(); ?>
<?php get_footer(); ?>