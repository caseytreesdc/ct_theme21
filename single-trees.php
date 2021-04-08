<?php get_header(); ?>
<div class="Tree">
  <div class="Tree__loop">
    <?php 
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
    ?>
              <?php
                $masthead = get_field('masthead', get_the_ID())[0]['image'];
                $mastheadSRC = wp_get_attachment_image_src( $masthead, 'full')[0];
              ?>
              <div
                class="Tree__masthead"
                style="
                  background: linear-gradient(
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, 0),
                    rgba(0, 0, 0, .4),
                    rgba(0, 0, 0, 1)
                    ),
                    url(<?php echo $mastheadSRC ?>);
                  /* background-position: center; */
                  background-repeat: no-repeat;
                  background-size: cover;
                "
              >
                <h2><?php the_title();?></h2>
              </div>
              
              <div class="Tree__Obrien-and-content">
                <div class="Tree__Obrien">
                  <img
                    src=" <?php 
                      echo wp_get_attachment_image_src(get_fields()['related_image'], 'full')[0] ?>"
                  >
                </div>
                <div class="Tree__content">
                  <?php the_content();?>
                </div>
              </div>
              
              <?php 
                $images = get_fields()['image_gallery'];
                if (count($images) > 5) {
                  $columns = '4-plus';
                } else $columns = strval(count($images) - 1);

                $galleryClassName = "Tree__gallery-".$columns."-columns"; ?>
              
              <div class="Tree__gallery <?php echo $galleryClassName ?>">
                  <?php foreach ($images as $key => $value) { 
                    if ($key != 0) { 
                      $imageSrc = wp_get_attachment_image_src($value['image'], 'full')[0];?>
                      
                      <a target="_blank" href="<?php echo $imageSrc ?>">
                        <img 
                          class="Tree__image"
                          src="<?php echo $imageSrc ?>"
                        >
                      </a>
                  <?php }
                  } ?>
              </div>
              
              <?php
            }
        }
    ?>
  </div>
</div>
<?php get_footer(); ?>
