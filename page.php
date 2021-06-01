<?php /* Template Name: Default template */ ?>
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
        $mastheadClassList = "Page__masthead";
        if ( get_field('masthead')[0]['tall']) {
          $mastheadClassList .= " tall-masthead";
        }
        
        $title = get_field('masthead')[0]['title'];
        $subtitle = get_field('masthead')[0]['excerpt'];
        if (!$title) {
          $title = get_the_title();
        } 
?>

<div
  class="<?php echo $mastheadClassList ?>"
  style="
    background: linear-gradient(
      rgba(44, 16, 16, 0),
      rgba(44, 16, 16, 0),
      rgba(44, 16, 16, 0),
      rgba(44, 16, 16, .4),
      rgba(44, 16, 16, 1)),
      url(<?php echo $mastheadSRC ?>);
    /* background-position: center; */
    background-repeat: no-repeat;
    background-size: cover;
  "
>
  <div class="Page__heading-text">
    <h1 class="Page__title"><?php echo $title ?></h1>
    <?php if ($subtitle) { ?>
      <p class="Page__subtitle"><?php echo $subtitle ?></p>
    <?php }?>  
  </div>
</div>
<div class="Page">
  <?php the_content();?>
  <?php
      }
  }
  ?>
</div>

<?php get_template_part('template-parts/acf', 'modules') ?>
<?php get_footer(); ?>

