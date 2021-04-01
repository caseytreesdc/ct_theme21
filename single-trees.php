<?php get_header(); ?>
<div class="Leaflet">
    
  <div class="Leaflet__loop">
    <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
    ?>
    <h2 class="Leaflet__loop-title"><?php the_title();?></h2>
    <div class="Leaflet__loop-content">
      <?php the_content();?>
    </div>
    <?php
            var_dump(get_fields());
            }
        }
    ?>
  </div>
</div>
<?php get_footer(); ?>
