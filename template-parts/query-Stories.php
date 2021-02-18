<?php
$storiesArgs = array(
    'posts_per_page' => 8,
    'offset' => 4
);
$storiesQuery = new WP_query($storiesArgs);
if ($storiesQuery->have_posts())
{
?>
  <section class="Blog__Stories">
    <?php while ($storiesQuery->have_posts()):
        $storiesQuery->the_post();
?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(array(
            'Blog__Stories-module'
        )); ?>>
      <?php
        $storiesImage = get_field('image');
        $storiesSize = 'large'; // (thumbnail, medium, large, full or custom size)
        if ($storiesImage)
        {
            $storiesImageSrc = wp_get_attachment_image_src($storiesImage, $storiesSize) [0];
        }
?>
<div class="Blog__Stories-image">
        <img class="Blog__Stories-image-img" src="<?php echo $storiesImageSrc ?>" alt="" />
  </div>
  <div class="Blog__Stories-text">
  <p class="Blog__Stories-date"><?php echo get_the_date('M\. j Y'); ?></p>
        <p class="Blog__Stories-text-title">
                  <a class="Blog__Stories-text-title-a" href="<?php the_permalink(); ?>"
                    ><?php the_title(); ?></a
                  >
                </p>
                <p class="Blog__Stories-excerpt">
                  <?php echo get_the_excerpt(); ?>
                </p>
  </div></div>
    <?php
    endwhile; ?>
  </section>
  
    <?php
}
?>
