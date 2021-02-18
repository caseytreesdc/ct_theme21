<?php get_header() ?>
<section class="Blog__section-title">
  <h1 class="Blog__title-padded">THE LEAFLET</h1>
</section>
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

    <?php
    endwhile; ?>

    <?php wp_reset_postdata(); ?>

  </section>

<?php
}
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
        <div class="Blog__Recents-module">
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
        <p class="Blog__Recents-text-title">
                  <a class="Blog__Recents-text-title-a" href="<?php the_permalink(); ?>"
                    ><?php the_title(); ?></a
                  >
                </p>
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
