<?php get_header(); ?>
<div class="Archive__home">
    <div class="Archive__posts-list">
        <?php 
            $postCount = 0;
            if( have_posts() ) {
                while( have_posts() ) {
                    $postCount++;
                    the_post();?>
                    <div class="Archive__post">
                        <h3>
                            <a class="Archive__post-title" href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h3>
                        <p class="Archive__author-date"><?php echo get_the_date(); ?> by <?php echo get_field('author');?></p>
                        <?php 
                            $image = get_field('image');
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if( $image ) {
                                $imageSrc = wp_get_attachment_image_src( $image, $size )[0];
                            }
                        ?>
                        <img
                            class="Archive__img"
                            src="<?php echo $imageSrc ?>"
                            alt=""
                        />
                        <p><?php echo $postCount; ?></p>
                        <hr>
                    </div>
                <?php
                }
            }
        ?>
        <?php the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( 'NEWER POSTS', 'textdomain' ),
            'next_text' => __( 'OLDER POSTS', 'textdomain' ),
        ) ); ?>
    </div>
</div>
<?php get_footer(); ?>
