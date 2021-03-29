<?php get_header(); ?>

<section class="Archive__section-title">
  <h1 class="Archive__title-padded">THE LEAFLET</h1>
</section>

    <?php the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => __('NEWER POSTS', 'textdomain') ,
    'next_text' => __('OLDER POSTS', 'textdomain') ,
)); ?>
<div class="Archive__home">
    <div class="Archive__posts-list">
        <?php
if (have_posts())
{
    while (have_posts())
    {   var_dump(get_fields()); 
        the_post(); ?>
                    <div class="Archive__post">
                        <?php
        $image = get_field('image');
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
        if ($image)
        {
            $imageSrc = wp_get_attachment_image_src($image, $size) [0];
        }
?>
                        <img
                            class="Archive__img"
                            src="<?php echo $imageSrc ?>"
                            alt=""
                        />
                        <div class="Archive__post-text">
                            <h3 class="Archive__post-title">
                                <a class="Archive__post-title-a" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="Archive__author-date"><?php echo get_the_date('M\. j Y'); ?> / <?php echo get_field('author'); ?></p>
                            <p class="Archives__excerpt">
                  <?php echo get_the_excerpt(); ?>
                </p>
                        </div>
                    </div>
                <?php
    }
}
?>
    </div>
</div>
        <?php the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => __('NEWER POSTS', 'textdomain') ,
    'next_text' => __('OLDER POSTS', 'textdomain') ,
)); ?>
<?php get_footer(); ?>
