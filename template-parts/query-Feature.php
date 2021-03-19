<?php 

  // Sets postData if we are Featuring a Post
  if (get_fields(get_queried_object_id())['feature_an_article']) {
    $featuredPost = get_fields(get_queried_object_id())['featured_post'];
    
    $postData = array(
      'ID' => $featuredPost->ID,
      'permalink' => get_the_permalink($featuredPost->ID),
      'title' => $featuredPost->post_title,
      'excerpt' => get_the_excerpt($featuredPost->ID),
      'imageSrc' => wp_get_attachment_image_src(get_fields($featuredPost->ID)['image'], 'large')
    );
  } 
  
  // Sets postData if there is not a Featured post ot the most recent post
  else { 
    $featureArgs = array(
      'post_type' => 'post',
      'posts_per_page' => 1
    );
    $featureQuery = new WP_query($featureArgs);
    
    if ($featureQuery->have_posts()) {
      while ($featureQuery->have_posts()):
        $featureQuery->the_post();

        $postData = array(
          'ID' => get_the_ID(),
          'permalink' => get_the_permalink(),
          'title' => get_the_title(),
          'excerpt' => get_the_excerpt(),
          'imageSrc' => wp_get_attachment_image_src(get_field('image'), 'large')
        );
      endwhile;
      wp_reset_postdata();
    }
  }
?>

<!-- POST MARKUP -->
<section class="Blog__section-Feature">
  <div id="post-<?php echo $postData['ID'] ?>" class="Blog__Feature-padded">
    <div class="Blog__Feature-text">
      <p class="Blog__Feature-text-title">
        <a class="Blog__Feature-text-title-a" href="<?php echo $postData['permalink']; ?>"
          ><?php echo $postData['title']; ?></a
        >
      </p>
      <p class="Blog__Feature-excerpt">
        <?php echo $postData['excerpt']; ?>
      </p>
      <a class="Blog__Feature-more" href="<?php echo $postData['permalink']; ?>">READ MORE</a>
    </div>
    <div class="Blog__Feature-image">
      <img class="Blog__Feature-image-img" src="<?php echo $postData['imageSrc'][0] ?>" alt="" />
    </div>  
  </div>
</section>
