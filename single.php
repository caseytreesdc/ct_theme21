<?php get_header(); ?>
<div class="Leaflet">
  <h1 class="Leaflet__h1">THE LEAFLET</h1>
  <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                ?>
  <h2>
    <a href="<?php the_permalink();?>"><?php the_title();?></a>
  </h2>
  <p>
    <?php echo get_the_date(); ?>
    /
    <?php echo get_field('author');?>
  </p>
  <?php 
                    $image = get_field('image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>
  <?php echo get_the_category_list(); ?>
  <?php the_content();?>
  <?php 

                $fields = get_fields();
                
                if( $fields ): ?>
  <ul>
    <?php foreach( $fields as $name =>
    $value ): ?>
    <li>
      <b><?php echo $name; ?></b>
      <?php echo $value; ?>
    </li>
    <?php endforeach; ?>
  </ul>

  <?php endif; ?>
  <?php
            }
        }
    ?>
</div>
<?php get_footer(); ?>
