<?php get_header(); ?>
<?php 
    if( have_posts() ) {
      while( have_posts() ) {
        the_post();
        // printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( get_the_ID() ) );
        ?>
<?php
    $masthead = get_field('masthead', get_the_ID())[0]['image'];
    $mastheadSRC = wp_get_attachment_image_src( $masthead, 'full')[0];
  ?>
<div
  class="Page__masthead"
  style="
    background: linear-gradient(
      rgba(55, 55, 55, .5),
      rgba(55, 55, 55, .5),
      rgba(55, 55, 55, 1)
      ),
      url(<?php echo $mastheadSRC ?>);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: cover;
  "
>
<h1 class="Page__h1"><?php the_title();?></h1>
</div>
  <div class="Page">
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
</div>
