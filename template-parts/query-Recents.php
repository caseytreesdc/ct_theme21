<?php
$recentsArgs = array(
    'posts_per_page' => 3,
    'offset' => 1
);
$recentsQuery = new WP_query($recentsArgs);
if ($recentsQuery->have_posts())
{
?>
  <section class="Blog__Recents">
    <?php while ($recentsQuery->have_posts()):
        $recentsQuery->the_post();
?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(array(
            'Blog__Recents-module'
        )); ?>>
            <?php
        $recentsImage = get_field('image');
        $recentsSize = 'large'; // (thumbnail, medium, large, full or custom size)
        if ($recentsImage)
        {
            $recentsImageSrc = wp_get_attachment_image_src($recentsImage, $recentsSize) [0];
        }
?>
    <div class="Blog__Recents-image">
      <img class="Blog__Recents-image-img" src="<?php echo $recentsImageSrc ?>" alt="" /></div>
      <p class="Blog__Recents-date"><?php echo get_the_date('M\. j Y'); ?></p>
      <a class="Blog__Recents-text-title-a" href="<?php the_permalink(); ?>"
        ><?php the_title(); ?></a
      >            
      <p class="Blog__Recents-excerpt">
        <?php echo get_the_excerpt(); ?>
      </p>
    </div>
    <?php
    endwhile; ?>

    <?php wp_reset_postdata(); ?>
  </section>
  <?php
} 
?>