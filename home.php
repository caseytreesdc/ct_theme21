<?php get_header() ?>
<?php $postCount = 0 ?>
<div class="Blog">
  <div class="Blog__home">
    <h1 class="Blog__title">THE LEAFLET</h1>
    <div class="Blog__posts-list">
      <?php
if (have_posts())
{
    while (have_posts())
    {
        the_post();
        $postCount++; ?>
      <div class="Blog__post">
        <h3>
          <a class="Blog__post-title" href="<?php the_permalink(); ?>"
            ><?php the_title(); ?></a
          >
        </h3>
        <p class="Blog__author-date">
          <?php echo get_the_date(); ?>
          by
          <?php echo get_field('author'); ?>
        </p>
        <?php
        $image = get_field('image');
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
        if ($image)
        {
            $imageSrc = wp_get_attachment_image_src($image, $size) [0];
        }
?>
        <img class="Blog__img" src="<?php echo $imageSrc ?>" alt="" />
        <hr />
      </div>
      <?php
    }
}
?>
      <?php the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => __('NEWER POSTS', 'textdomain') ,
    'next_text' => __('OLDER POSTS', 'textdomain') ,
)); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
