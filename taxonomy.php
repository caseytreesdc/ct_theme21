<?php get_header(); ?>

<section class="Archive__section-title">
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?> 
  <h1 class="Archive__title-padded"><?php echo $term->name ?></h1>
</section>

<?php the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => __('NEWER POSTS', 'textdomain') ,
    'next_text' => __('OLDER POSTS', 'textdomain') ,
    )); 
?>

<div class="Archive__home">
    <div class="Archive__posts-list">
        <?php
if (have_posts())
{
    while (have_posts())
    {   
        the_post(); ?>
                    <div class="Archive__post">
                        <?php
        $image = get_field('image');
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
        if ($image)
        {
            $imageSrc = wp_get_attachment_image_src($image, $size) [0]; ?>
            <img
            class="Archive__img"
            src="<?php echo $imageSrc ?>"
            alt=""
            />
            <?php
        }
?>
                        <div class="Archive__post-text">
                            <h3 class="Archive__post-title">
                                <a class="Archive__post-title-a" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="Archive__author-date"><?php echo get_the_date('M\. j Y'); ?></p>
                            <p class="Archives__excerpt"><?php echo get_the_excerpt(); ?></p>
                            <?php 
                                $categories = get_the_term_list($resource_id, 'resources-categories');
                                if($categories) {
                                    ?><p class="Archive__meta">Categories: <?php echo $categories;?></p><?php
                                }
                            ?>
                            <?php 
                                $tags = get_the_term_list($resource_id, 'resources-tags', '', ' ');
                                if($tags) {
                                    ?><p class="Archive__meta">Tags: <?php echo $tags;?></p><?php
                                }
                            ?>
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
