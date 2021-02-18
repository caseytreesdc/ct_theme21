<?php
$featureArgs = array(
    'post_type' => 'post',
    'posts_per_page' => 1
);
$featureQuery = new WP_query($featureArgs);
if ($featureQuery->have_posts())
{ ?> 
<section class="Blog__section-Feature">
	
  <?php while ($featureQuery->have_posts()):
        $featureQuery->the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(array(
            'Blog__Feature-padded'
        )); ?>>
    <div class="Blog__Feature-text">
      <p class="Blog__Feature-text-title">
        <a class="Blog__Feature-text-title-a" href="<?php the_permalink(); ?>"
          ><?php the_title(); ?></a
        >
      </p>
      <p class="Blog__Feature-excerpt">
        <?php echo get_the_excerpt(); ?>
      </p>
      <a class="Blog__Feature-more" href="<?php the_permalink(); ?>">READ MORE</a>
    </div>
    <div class="Blog__Feature-image">
      <?php
        $featuredImage = get_field('image');
        $featuredSize = 'large'; // (thumbnail, medium, large, full or custom size)
        if ($featuredImage)
        {
            $featuredImageSrc = wp_get_attachment_image_src($featuredImage, $featuredSize) [0];
        }
        ?>
      <img class="Blog__Feature-image-img" src="<?php echo $featuredImageSrc ?>" alt="" />
    </div>  
  </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</section>

<?php
} ?>