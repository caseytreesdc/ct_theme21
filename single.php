<?php get_header(); ?>
<div class="Leaflet">
  <div class="Leaflet__loop">
    <h1 class="Leaflet__loop-h1">THE LEAFLET</h1>
    <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                ?>
    <?php 
                    $image = get_field('image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                    ?>
    <p class="Leaflet__loop-meta">
      <?php echo get_the_date(); ?>
      / <br class="Leaflet__loop-meta-br">
      <?php echo get_field('author');?>
    </p>
    <h2 class="Leaflet__loop-title"><?php the_title();?></h2>
    <div class="Leaflet__loop-content">
      <?php the_content();?>
    </div>
    <?php
            }
        }
    ?>
  </div>
</div>
<?php get_footer(); ?>
